<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product</title>
</head>

<body>
<div class="text-end">
        <a href="{{ route('products.create') }}"><br>
            <button type="button" class="btn btn-info">New Add</button></a>
    </div>
    <div class="container text-center">
        <table class="table align-items-center   table-hover  border-dark">
            <thead>
                <tr class="text-center">
                    <th class="col-md-2 col-sm-6">ID</th>
                    <th class="col-md-2 col-sm-6">Product Name</th>
                    <th class="col-md-2 col-sm-6">category_id</th>
                    <th class="col-md-2 col-sm-6">Quantity</th>
                    <th class="col-md-2 col-sm-6">Price</th>

                    <th class="col-md-2 col-sm-6">image</th>
                    <th class="col-md-2 col-sm-6">Status</th>
                    <th class="col-md-2 col-sm-6">Action</th>
                </tr>
                @foreach($products as $key => $pro)
            </thead>
            <tbody>

                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$pro->product_name}}</td>
                    <td>{{$pro->category->category_name}}</td>
                    <td>{{$pro->quantity}}</td>
                    <td>{{$pro->price}}</td>
                    <td>  <img src="{{Storage::url($pro->image)}}" alt="chua hien thi" width="100px"></td>
                   
                    <td>
    @if($pro->status == 0)
        Hết hàng
    @else
        Còn hàng
    @endif
</td>
                    <td>
                        <div class="d-flex">
                            <form>

                                <a href="{{ route('products.edit', ['product' => $pro->id]) }}" class="btn btn-primary">Edit</a>
                            </form>

                            <form action="{{ route('products.destroy', ['product' => $pro->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('products.show', ['product' => $pro->id]) }}" class="btn btn-success">Show</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$products->links()}}
</body>

</html>