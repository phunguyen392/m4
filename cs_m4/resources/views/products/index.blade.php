<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>Products</title>
</head>

<body><br>





    @extends('admin.master')
    @section('content')
    <div>
        <div class="input-group container text-right">
            <div class="form-outline">
                <form>
                    <input name="keyword" type="search" class="form-control" placeholder="search....">
            </div>
            <button id="search-button" type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
            </form>
        </div>
        <div>
            <a href="{{route('categories.create')}}" class="btn btn-outline-primary ">New Add</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h2 class="text-white text-capitalize ps-3 text-center">Product Name</h2>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">

                        <div class="container text-center">
                            <table class="table align-items-center   table-hover  border-dark">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-2 col-sm-6">ID</th>
                                        <th class="col-md-2 col-sm-6">Name</th>
                                        <th class="col-md-2 col-sm-6">Image</th>
                                        <th class="col-md-2 col-sm-6">Quantity</th>
                                        <th class="col-md-2 col-sm-6">Price</th>

                                        <th class="col-md-2 col-sm-6">Category</th>
                                        <th class="col-md-2 col-sm-6">Status</th>
                                        <th class="col-md-2 col-sm-6">Action</th>
                                    </tr>
                                    @foreach($products as $key => $product)
                                </thead>
                                <tbody>
                                    <tr class="text-center" style="color:blueviolet;">
                                        <td>
                                            <span class="badge badge-sm bg-gradient-success">{{$key+1}}</span>

                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"></h6>
                                                    <p class="text-xs text-secondary mb-0">ntpccn@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-md-2 col-sm-6">

                                            <span class="badge badge-sm bg-gradient-success" style="width: 100%;">{{$product->name}}</span>

                                            <p class="text-xs font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <img src="{{Storage::url($product->image)}}" alt="chua hien thi" width="100px">

                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{$product->quantity}}
                                            <!-- <span class="badge badge-sm bg-gradient-success"></span> -->
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{$product->price}}<br>

                                            <!-- <span class="badge badge-sm bg-gradient-success">Yes</span> -->
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{$product->category_name}}<br>

                                            <!-- <span class="badge badge-sm bg-gradient-success">Yes</span> -->
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{$product->status}}<br>

                                            <!-- <span class="badge badge-sm bg-gradient-success">Yes</span> -->
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="btn-group">
                                            <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-outline-success">Show</a>
                                              
                                            <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-outline-primary">Edit</a>
                                                <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>

                                        </td>

                                    </tr>

                                </tbody>
                                @endforeach
                            </table><br>
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection