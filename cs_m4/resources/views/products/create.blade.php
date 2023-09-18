<div>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="name">Name:<br></label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="quantity">Quantity:<br></label>
            <input type="number" name="quantity" id="name">
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
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                <?php endforeach; ?>
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