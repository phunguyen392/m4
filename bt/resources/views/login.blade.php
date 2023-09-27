<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <form method="post" action="/login">
        @csrf
        <label for="username">Tên đăng nhập1:</label><br>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mật khẩu:</label><br>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>