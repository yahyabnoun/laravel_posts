<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;




class AdminController extends Controller
{
    public function dashbord(Request $request)
    {
        $posts =  Post::where('title','Like','%'.$request->search.'%')
        ->orWhere('body','Like','%'.$request->search.'%')
        ->get();
        
        // if (!$posts) {
        //     $posts =  Post::all();
        // }

        return view('admin.Dashbord',compact('posts'));

    }

    public function edit($id)
    {
        $post =  Post::find($id);
        $categories=Categories::all();
        return view('admin.edit',compact('post','categories'));

    }

    public function update(Request $request,$id)
    {
        $post =  Post::find($id);

        $post->title=$request->title;
        $post->categorie_id=$request->category;
        $image = $request->file('photo') ;
        // dd($image);
        if ($image) {

            $imagepath =  $image->store('images','public');

            Storage::delete('public/storage/images',$image) ;

            $post->photo =  $imagepath ;
        }


        $post->save();

        return redirect()->route('admin.dashbord');

    }


    
    public function create()
    {
        $categories =  Categories::all();
        
        return view('admin.ajouter_post',compact('categories'));
        
    }
    
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|exists:categories,id'
        ]);
        
        
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->title;
        $post->premium = 0;
        $post->published = 1;
        // dd($request->file('photo'));
        $photo = $request->file('photo');
        if ($photo) {
            $photoPath = $photo->store('images', 'public');
            $post->photo = $photoPath;
            
        }
        
        $post->admin_id = 1;
        $post->categorie_id = $request->category;
        
        $post->save();
        return redirect()->route('admin.dashbord');
    }
    

    public function delete($id)
    {
        $post =  Post::find($id);

       $post->delete() ;
        return redirect()->route('admin.dashbord');
    
    }


    public function test( )
    {
        $count =  Post::Counttest();

        return 'done'.$count;
    
    }

    
    public function viewLogin()
    {
        return view('admin.login');
    
    }
    public function actionlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $admin = Admin::where('email',  $request->email)->first();
        
        if ( $admin && Hash::check($request->password, $admin->password)) {
     

            Session::put('email',  $request->email) ;
            $adminSession = Session::get('email');


                if ($adminSession) {
                    return redirect()->intended('/admin/dashbord');
                }
    }
    return redirect()->route('admin.login');

    }
    public function actionlogout( )
    {


        // dd(Session::get('email'));
        Session::forget('email');
        Session::flush();
        cache()->flush();
        return redirect()->route('admin.login');
    }   

}
