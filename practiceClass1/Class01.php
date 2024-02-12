<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Information</title>
</head>
<body>

<?php
    echo"<h1>Hello World</h1>";

    //System Information
    //phpinfo();

    //Can be used to see which browser is used
    echo $_SERVER['HTTP_USER_AGENT'];

    if(str_contains($_SERVER['HTTP_USER_AGENT'],'Chrome')){
        echo '<br>';
        echo 'You are using Google Chrome';
    }
?>
    
</body>
</html>