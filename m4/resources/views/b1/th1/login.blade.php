<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>form dang nhap</h2>
    <form action="/login" method="post">
      @csrf
    <p>

        <label for="username">
            <input type="text" name="username" placeholder="ten dang nhap">
        </label>
    </p>
    <p>

        <label for="password">
            <input type="password" name="password" placeholder="nhap mk">
        </label>
    </p>
    <p>

        <input type="submit" value="dang nhap" class="custom-button">
    </p>
    </form>




    
    <style>
@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.custom-button {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 50%;
  animation: blink 1s infinite;
}
        </style>

</body>
</html>