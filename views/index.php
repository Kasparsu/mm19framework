<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home page!</h1>
    <h2>This is website of <?=$name?></h2>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>
    <form action="/login" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>