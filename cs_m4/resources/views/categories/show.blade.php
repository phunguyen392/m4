@extends('admin.master')
@section('content')
<style>
    table {
        border-collapse: 1;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: blue;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
   
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS của Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Show</title>
</head>
<body>
    
<br>
<div class="text-center">

    <h1 style="color:blue">day la show</h1>
</div>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th class="col-md-10 col-sm-8">Description</th>
        <th>Action</th>

    </tr>
    <tr>
        <td>{{$cate->id}}</td>
        <td>{{$cate->category_name}}</td>
        <td>{{$cate->description}}</td>
        <td>
            <a href="{{route('categories.index')}}" class="btn btn-warning">BACK</a>

        </td>
    </tr>
</table>
</body>
</html>
@endsection