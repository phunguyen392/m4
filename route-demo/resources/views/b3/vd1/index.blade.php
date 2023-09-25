<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tùy chọn: Thêm các tệp CSS tùy chỉnh khác của bạn (nếu có) -->
    <!-- Ví dụ: -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- JavaScript của Bootstrap (bao gồm jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tùy chọn: Thêm các tệp JavaScript tùy chỉnh khác của bạn (nếu có) -->
    <!-- Ví dụ: -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <title>Document</title>
</head>

<body>

    <br>
    <div class="float-right">
        <form method="get" action="{{ route('user.index') }}">
            <p>
                <label>
                    <input name="keyword" type="search" placeholder="nhap tu" class="btn btn-Secondary">
                    <input type="submit" value="search" class="btn btn-primary">
                </label>
            </p>
        </form>
    </div>
    <div class="text-end">
        <a href="{{ route('user.create') }}"><br>
            <button type="button" class="btn btn-info">New Add</button></a>
    </div>
    <br>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
        <thead>
            <tr>
                <th>TT</th>

                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($users as $key => $user)
            <!-- Hiển thị thông tin của mỗi $nd -->

            <tr>
                <td>{{$key+1}}</td>

                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

                <td>
                    <img src="{{Storage::url($user->image)}}" alt="chua hien thi" width="100px">
                </td>
                <td>
                    <div class="d-flex">
                        <form>

                            <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a>
                        </form>

                        <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('user.show', ['id' => $user->id]) }}" class="btn btn-success">Show</a>
                    </div>
                </td>

            </tr>
            @endforeach


        </tbody>
    </table>

    <div class="pagination justify-content-center">
        <!-- Hiển thị liên kết phân trang với Bootstrap -->
        {{$users->links('pagination::bootstrap-4')}}
      
</body>

</html>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" 
        src="https://www.youtube.com/embed/K0MW54sM8dk" allowfullscreen></iframe>
</div>