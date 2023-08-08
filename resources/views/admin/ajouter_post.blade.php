 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>
 <body>
    

    <div>
        <form method="post"  action="{{route('store_post')}}" enctype="multipart/form-data">
            @csrf
            <label for="">title : </label>
            <input name="title" type="text">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <br>

            <label for="">body : </label>
            <input name="body"  type="text">
            @error('body')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <br>

            <label for="">photo : </label>
            <input name="photo"  type="file">
            @error('photo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <br>

            <label for="">categories : </label>
            <select name="category" id="">
                <option value=""> select un categorie </option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{$category->name}} </option>
                @endforeach
            </select>
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <br>
            <button type="submit">submit</button>

        </form>

    </div>



 </body>
 </html>