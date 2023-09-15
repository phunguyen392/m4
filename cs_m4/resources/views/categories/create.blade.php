<div>
    <form method="post" action="{{route('categories.store')}}">
        @csrf
        <p>
            <label for="cate">Category Name:</label><br>
            <input type="text" name="category_name" id="cate">
        </p>
        <p>
            <label for="des">Description:</label><br>
            <input type="text" name="description" id="des">
        </p>
        <input type="submit" value="Add">
    </form>
</div>