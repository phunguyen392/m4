<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->


    <title>Products</title>
</head>

<body><br>
    <div>
        <a href="{{route('products.create')}}" class="btn btn-primary">New Add</a>
    </div><br>
    <h1 class="text-center">Product Name</h1>
    <div class "table-responsive">
        <table class="center-table" id="dataTable" width="80%" cellspacing="10" border="1">
            <thead>
                <tr>
                    <th class="col-md-2 col-sm-6">ID</th>
                    <th class="col-md-2 col-sm-6">Name</th>
                    <th class="col-md-2 col-sm-6">Quantity</th>
                    <th class="col-md-2 col-sm-6">Price</th>
                    <th class="col-md-2 col-sm-6">Image</th>
                    <th class="col-md-2 col-sm-6">Category</th>
                    <th class="col-md-2 col-sm-6">Status</th>
                    <th class="col-md-2 col-sm-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$product->name}} </td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <img src="{{Storage::url($product->image)}}" alt="chua hien thi" width="100px">
                    </td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->status}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('products.edit', ['id' => $product->id]) }}"><button class="bt btn-primary">Edit</button></a>
                            <form action="{{ route('product.destroy', ['id' => $product->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>