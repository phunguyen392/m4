
<form action="<?php echo route('products.update', $product->id) ?>" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <p>
        <label for="product_name">Product Name:<br></label>
        <input type="text" id="product_name" name="product_name" value="{{$product->product_name}}">
    </p>
    <p>
        <label for="category_id">Category:<br></label>
        <select name="category_id" style="width: 177px;">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                {{ $category->category_name }}
            </option>
            @endforeach
        </select>
    </p>
    <p>
        <label for="quantity">Quantity:<br></label>
        <input type="number" id="quantity" name="quantity" value="{{$product->quantity}}">
    </p>
    <p>
        <label for="price">Price:<br></label>
        <input type="number" id="price" name="price" value="{{$product->price}}">
    </p>
    <p>
        <label for="image">Image:<br></label>
        <input type="file" id="name" name="image" value="{{$product->image}}">
    </p>
  
    <p>
        <label for="status">Status:<br></label>
        <input type="text" id="status" name="status" value="{{$product->status}}">
    </p>
    <input type="submit" value="Update">
</form>