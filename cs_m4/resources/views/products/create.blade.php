

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Product Create</title>
</head>

<body>

    <div class="container centered-form" style="color: blueviolet;">
        <h1>Product Create</h1>
    </div>
    <div class="container centered-form">
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="product_name">Product Name:<br></label>
                <input type="text" name="product_name" id="product_name">
            </p>
            <p>
    <label for="category_id">Category:</label><br>
    <select name="category_id" style="width: 177px;">
        @foreach ($categories as $cate)
        <option value="{{ $cate->id }}">{{ $cate->category_name }}</option>
        @endforeach
    </select>
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
                <label>Status:<br></label>
                <input type="text" name="status">
            </p>
            <input type="submit" value="New Add">
        </form>
    </div>
</body>

</html>
