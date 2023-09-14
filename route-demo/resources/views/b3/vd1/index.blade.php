<a href="{{ route('user.create') }}"><br>
    <button type="button" class="btn btn-info">them</button>
</a>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
    <thead>
        <tr>
            <th>TT</th>

            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            </th>
            <th>Action</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($users as $key => $user)

        <tr>
            <td>{{$key+1}}</td>

            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td> <a href="{{ route('user.edit', ['id' => $user->id]) }}"><button class="btn btn-primary">Edit</button></a>

            <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            <a href="{{ route('user.show', ['id' => $user->id]) }}" >Show</a>
             </td>

        </tr>
        @endforeach



    </tbody>
</table>