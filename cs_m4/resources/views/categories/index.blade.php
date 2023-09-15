<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS của Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Category</title>
</head>
<body>
    <div>
        <a href="{{route('categories.create')}}" class="btn btn-primary">New Add</a>
    </div>
    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0" border="2">
        <tr>
            <th>Id</th>
            <th>Produc Name</th>
            <th>Description</th>
            <th>Action</th>

            
        </tr>
    @foreach ($categories as $key => $cate)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$cate->category_name}}</td>
            <td>{{$cate->description}}</td>
            <td>
                <a href="{{ route('categories.edit', ['id' => $cate->id]) }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>