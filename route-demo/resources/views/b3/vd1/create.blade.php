<form action="{{route('user.store')}}" method="post">
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
    

    <input type="submit" name="submit" value="Đăng Nhập" />
</form>