<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tu dien anh viet</title>
</head>
<body>
    <form action="/tra_tu" method="post">
        @csrf
        <p>
            <label>tu dien:<br>
         <input  name="keyword" placeholder="nhap tu muon tra" >
            </label>
            <select name="language" id="">
            <option value="tienganh">tieng anh</option>
            <option value="tiengviet">tieng viet</option>
            </select>
        </p>
        <p>
            <label>
                <input type="submit" value="tra cuu">
            </label>
        </p>
    </form>
</body>
</html>