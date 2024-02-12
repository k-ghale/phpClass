<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics Class</title>
</head>
<body>
    
<!-- Mixing both HTML and PHP modes -->

<!-- First PHP -->
<?php
    if(str_contains($_SERVER['HTTP_USER_AGENT'],'Chrome')){
?>

<!-- First HTML  -->
    <h1>str_contains() returned true</h1>
    <p>You are using Google Chrome</p>

<!-- Second PHP -->
<?php
}
else{
?>

<!-- Second HTML -->
    <h1>str_contains() returned false</h1>
    <p>You are not using Google Chrome</p>

<!-- Third PHP -->
<?php
}
?>
</body>
</html>