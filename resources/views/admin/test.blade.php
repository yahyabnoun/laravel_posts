<table >
    <thead>
        <tr>
            <th> id </th>
            <th> category </th>
            <th> images </th>
            <th> actions </th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>

            <td>{{$post->category->name}}</td>
            <td >
                
                <img src="{{asset('storage/'.$post->photo)}}" alt="">
            </td>
            <td >
                <button >
                    <a  href="{{route('admin.edit',$post->id)}}">edit</a>
                </button>
                

                <form method="post" action="{{route('admin.delete',$post->id)}}">
                    @csrf
                    @method('delete')
                     <button  type="submit">delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>