<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>

    </tr>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
       <td> <img src="{{Storage::url($user->image)}}" alt="chua hien thi" width="100px"></td>
    </tr>
</table>