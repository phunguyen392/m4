<form action="<?php echo route('categories.update',$cate->id)?>" method="post">
    @csrf
    @mthod('PUT')
    <p>
        <label for="cate">Category Name:</label>
        <input type="text" name="category_name" id="cate" value="{{$cate->category_name}}">
    </p>
    <p>
        <label for="des">Description:</label>
        <input name="description" type="text" value="{{$cate->description}}" >
    </p>
    <p>
        <input type="submit" value="Update">
    </p>
</form>