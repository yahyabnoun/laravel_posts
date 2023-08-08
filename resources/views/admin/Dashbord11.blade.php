<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
   
}
    </style>
    <title>Dashbord</title>
</head>
<body style="">
    
    <div>
        <button style=" background-color:  rgb(208, 255, 0) ;margin:10px 10px;border-radius: 10px">
            <a href="{{route('admin.ajouter_post')}}" style="color:  rgb(87, 35, 255)"  href="">Add</a>
        </button>
        
        <div>
            <form action="/admin/dashbord" method="get">
             <input type="text" name="search" id="search">
             <button type="submit">submit</button>
            </form>
            </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th> id </th>
                    <th> title </th>
                    <th> premium </th>
                    <th> published </th>
                    <th> category </th>
                    <th> images </th>
                    <th> actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td > 
                        <button style="width: 100%;border-radius: 10px;  {{   $post->premium ? 'background-color:  rgb(208, 255, 0)' : 'background-color: rgb(255, 238, 85)'}}">
                            {{   $post->premium ? 'yes' : 'no' }} </button >   
                        

                        </td>
                    <td>
                        <button style="width: 100%; border-radius: 10px;  {{   $post->published ? 'background-color:  rgb(208, 255, 0)' : 'background-color: rgb(255, 238, 85)'}};">
                            {{   $post->published ? 'yes' : 'no' }} </button >   
                    
                    </td>
                    <td>{{$post->category->name}}</td>
                    <td style="width: 200px">
                        
                        <img style="width: 100%" src="{{asset('storage/'.$post->photo)}}" alt="">
                    </td>
                    <td style=" display: flex">
                        <button style=" background-color:  rgb(208, 255, 0) ;margin:0px 10px;border-radius: 10px">
                            <a  href="{{route('admin.edit',$post->id)}}">edit</a>
                        </button>
                        

                        <form method="post" action="{{route('admin.delete',$post->id)}}">
                            @csrf
                            @method('delete')
                             <button style=" background-color:  rgb(255, 21, 0);margin:0px 10px;border-radius: 10px" type="submit">delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




</body>
</html>