

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class-01</title>
</head>
<body>
<?php 
    echo "<h1>Hello World</h1>";

    $is_admin = true;

    if($is_admin){
        echo "<h1>Authorized User</h1>";
    }
    else{
        echo "<h1>Normal User</h1>";
    }
    
?>
</body>
</html>