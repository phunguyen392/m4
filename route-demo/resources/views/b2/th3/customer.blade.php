<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>customer list</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
</head>

<body><br><br>
    <div class="container">
        <div class="card">
            <h1 class="card-header tex-center">Danh sách khach hang</h1>
            <div class="card-body">
            <a href="{{route('c')}}" class="btn btn-success mb-2">+ New</a>

                <table border="1">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Trần Trân Trọng</td>
                            <td>01234567890</td>
                            <td>trantrong@gmail.com</td>
                            <td>
                                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a& </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Phan Phá Phách</td>
                            <td>01234567890</td>
                            <td>phaphach@gmail.com</td>
                            <td>
                                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td></td>
                            <td>01234567890</td>
                            <td>email.test@mail.com</td>
                            <td>
                                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Đào Đú Đỡn</td>
                            <td>01234567890</td>
                            <td>dudon@gmail.com</td>
                            <td>
                                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Nguyễn Ngông Nghênh</td>
                            <td>01234567890</td>
                            <td>ngongnghenh@gmail.com</td>
                            <td>
                                <a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

</body>

</html>