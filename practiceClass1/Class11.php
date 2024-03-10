<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 11</title>
</head>
<body>
    
    <form action="Class11.php" method="post">
        <label>username : </label>
        <input type="text" name="username" >
        <br>

        <label>password: </label>
        <input type="password" name="password" >
        <br>

        <input type="submit" name="" id="" value="login" className="">
        
    </form>
</body>
</html>
<?php 
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo"{$username}";
    echo"<br>";
    echo"{$password}";
?>