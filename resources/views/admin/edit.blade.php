<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div ><button><a href="{{ url()->previous() }}"> Back </a></button>  </div>
    <form method="post" action="{{route('admin.update',$post->id)}}" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <label for="title">title :</label>
        <input type="text" value="{{$post->title}}" name="title">
        <br>
        <br>
        <label for="category" aria-placeholder="">category :</label>
        <select name="category"  >
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="">photo : </label>
        <input name="photo"  type="file">
        @error('photo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <br>
        <button type="submit"> update </button>
    </form>


</body>
</html>