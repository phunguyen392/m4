<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chek Email</title>
</head>
<body>
    <div class="main-content">
        <form method="get">
            <h1>Ung dung check email</h1>
            <p>
            <label for="input">Nhap email:<br>
                    <input type="email" name="email" id="input" placeholder="nhap mail vao day">
                </label>
            </p>
            <p>
                <label>
                <button type="submit">Check</button>
                </label>
            </p>
        </form>
            <p>{{$message}}</p>

    </div>
</body>
</html>