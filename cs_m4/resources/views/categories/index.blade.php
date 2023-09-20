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


</body>

</html>


@extends('admin.master')
@section('content')
<div>
    <div>
        <a href="{{route('categories.create')}}" class="btn btn-outline-primary ">New Add</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h2 class="text-white text-capitalize ps-3 text-center">Category Name</h2>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">

                    <div class="container text-center">
                        <table class="table align-items-center   table-hover  border-dark">
                            <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Category Name</th>
                                    <!-- <th>Description</th> -->
                                    <th>Action</th>
                                </tr>
                                @foreach ($categories as $key => $cate)
                            </thead>
                            <tbody>
                                <tr class="text-center" style="color:blueviolet;">
                                    <td>
                                        <span class="badge badge-sm bg-gradient-success"> {{$key+1}}</span>

                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"></h6>
                                                <!-- <p class="text-xs text-secondary mb-0">ntpccn@gmail.com</p> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-md-2 col-sm-6">

                                        <span class="badge badge-sm bg-gradient-success" style="width: 100%;height:20%">{{$cate->category_name}}</span>

                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <!-- <td class="align-middle text-center text-sm">
                                        {{$cate->description}}<br>

                                        <span class="badge badge-sm bg-gradient-success" >   </span>
                                    </td> -->
                                    <td class="align-middle text-center">
                                        <a href="{{ route('categories.edit', ['id' => $cate->id]) }}" class="btn btn-outline-primary">Edit</a>
                                        <a href="{{ route('categories.edit', ['id' => $cate->id]) }}" class="btn btn-outline-danger">Delete</a>
                                        <a href="{{ route('categories.show', ['id' => $cate->id]) }}" ><button class="btn btn-outline-success">Show</button></a>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table><br>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection()