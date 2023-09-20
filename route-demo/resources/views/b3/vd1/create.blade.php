<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>Form dang nhap</h1>
    <p>

        <label for="name">Tên đăng nhập:</label><br>
        <input id="name" name="name" type="text" value=""><br>
    </p>

    <p>
        </p>
        <label for="email">Email:</label><br>
        <input id="email" name="email" type="email" value=""><br>
        
<p>
    <label >Mật khẩu:</label><br>
    <input name="password" type="password" value=""><br>
</p>
    <p>
        <label>Anh:</label><br>
        <input type="file" name="image">
    </p>

    <input type="submit" name="submit" value="Add" />
</form>