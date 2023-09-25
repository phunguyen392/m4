@extends('admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Category Create</title>
</head>

<body>

    <div class="container centered-form" style="color: blueviolet;">
        <h1>Product Create</h1>
    </div>
    <div class="container centered-form">
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="name">Name:<br></label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="quantity">Quantity:<br></label>
                <input type="number" name="quantity" id="quantity">
            </p>
            <p>
                <label for="price">Price:<br></label>
                <input type="number" name="price" id="price">
            </p>
            <p>
                <label>Image:<br></label>
                <input type="file" name="image">
            </p>
            <p>
                <label for="category_id">Category:<br></label>
                <select name="category_id" style="width:177px;">
                    @foreach ($categories as $category)
                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <br><br>
            </p>
            <p>
                <label>Status:<br></label>
                <input type="text" name="status">
            </p>
            <input type="submit" value="New Add">
        </form>
    </div>
</body>

</html>
@endsection
