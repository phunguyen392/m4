@extends('admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS của Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div class="d-flex justify-content-center align-items-center">
  <form action="{{ route('categories.update', $cate->id) }}" method="post" class="my-4">
    @csrf
    @method('PUT')
    <p>
      <label for="cate">Category Name:</label><br>
      <input type="text" name="category_name" id="cate" value="{{$cate->category_name}}">
    </p>
    <p>
      <label for="des">Description:</label><br>
      <input name="description" type="text" value="{{$cate->description}}" id="des">
    </p>
      <button type="submit" class="btn btn-secondary">Update</button>
    <a href="{{route('categories.index')}}" class="btn btn-warning">BACK</a>
  </form>
</div>

@endsection
