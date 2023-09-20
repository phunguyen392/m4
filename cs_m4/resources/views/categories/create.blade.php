@extends('admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vh;
        }
    </style>
    <title>Category Create</title>
</head>

<body>
    <div class="container centered-form" style="color: blueviolet;">
        <h1>Category Create</h1>
    </div>

    <div class="container centered-form">
        <form method="post" action="{{route('categories.store')}}" class="border p-4 rounded">
            @csrf
            <div class="text-center" style="color:red;">

                <p>
                    <label for="cate">Category Name:</label><br>
                    <input type="text" name="category_name" id="cate" class="form-control">
                </p>
                <p>
                    <label for="des">Description:</label><br>
                    <input type="text" name="description" id="des" class="form-control">
                </p>
                <input type="submit" value="Add" class="btn btn-primary" style="width: 35%;">
                <a href="{{route('categories.index')}}" class="btn btn-warning">BACK</a>
            </div>

        </form>
    </div>
</body>

</html>
@endsection