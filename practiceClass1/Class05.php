<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 05</title>
</head>
<body>
    <form action="Class05.php" method="POST">
        <label>username : </label>
        <input type="text" name="username"><br >

        <label>password : </label>
        <input type="password" name="password"><br >

        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>