<form action="<?php echo route('categories.update',$cate->id)?>" method="post">
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
    <p>
        <input type="submit" value="Update">
    </p>
</form>