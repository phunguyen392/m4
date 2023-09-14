<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>

<body>
    <div>
        <form action="" method="get">
            @csrf
            <label>Ten:
                <p>
                    <input type="text" name="username">
                </p>
            </label>
            <label>Email:
                <p>

                    <input type="mail" name="email">
                </p>
            </label>
            <label>SDT:
<p>

    <input type="number" name="phone">
</p>
            </label>

        </form>
    </div>
</body>

</html>