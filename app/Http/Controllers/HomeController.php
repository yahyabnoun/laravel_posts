<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {

        $premiumPost = Post::all()[0];
        $popularPosts = Post::latest()->limit(4)->get();

        $posts = Post::latest()->limit(3)->get();

        // dd();
        // $carbon = new Carbon;
        return view('home',compact('premiumPost','popularPosts','posts'));

    }


    public function show($id)
    {

        $post= Post::find($id);

        // dd($post->category);

        // dd(url()->current());
        return view('single' , compact('post'));


    }


    public function paginition($postsnum){
        $posts =Post::latest()->limit($postsnum+2)->get();

        $data ='';
        foreach ($posts as $post) {
            $data .='
            <div class="col-md-12 col-sm-6 post-list-item post-item allpostclass">
                <div class="post post-list clearfix">
                    <div class="thumb rounded">

                        <div class="inner">
                            <a
                                href="https://themeger.shop/wordpress/katen/blog/2022/08/23/60-things-to-immediately-do-about-building/"><img
                                    width="600" height="250"
                                    style="width: 600px;"
                                    src="'.asset('storage/'.$post->photo).'"
                                    class="attachment-katen-thumb-list size-katen-thumb-list wp-post-image"
                                    alt="" decoding="async" loading="lazy" /></a>
                        </div>
                    </div>
                    <div class="details clearfix">
                        <ul class="meta list-inline mb-3">
                            <li class="list-inline-item">
                                <img width="32" height="32"
                                    src="https://themeger.shop/wordpress/katen/wp-content/uploads/2022/08/nick-arnot-321267-unsplash-48x48.jpg"
                                    class="avatar avatar-32 photo author" alt=""
                                    decoding="async" loading="lazy"
                                    sizes="(max-width: 32px) 100vw, 32px" />
                                <a href="" title="Posts by Katen Doe"
                                    rel="author">Katen Doe</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="">'.$post->category->name.'</a>
                            </li>
                            <li class="list-inline-item">
                               '.  Carbon::parse( $post->created_at )->Format("F d, Y").'
                            </li>
                        </ul>
                        <h5 class="post-title">
                            <a
                                href=" {{route("posts.show",'.$post->id.')}} ">
                            '. $post->title.'</a>
                        </h5>
                        <p class="excerpt mb-0">
                            The European languages are members of the same
                            family. Their separate existence is a myth.…
                        </p>
                        <div class="post-bottom clearfix d-flex align-items-center">
                            <div class="social-share me-auto">
                                <button class="toggle-button icon-share"></button>
                            </div>
                            <div class="more-button float-end">
                                <a
                                    href="https://themeger.shop/wordpress/katen/blog/2022/08/23/60-things-to-immediately-do-about-building/"><span
                                        class="icon-options"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
        return response()->json($data);

    }
}
