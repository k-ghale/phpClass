<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 08</title>
</head>
<body>
    <form action="Class08.php" method="post">
    
        <label>Radius : </label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calculate">

    </form>
</body>
</html>
<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $circumference = 2 * pi() * $radius;
    $circumference = round( $circumference,2);

    $area = null;
    $area = pi() * pow($radius,2);
    $area = round($area,2);

    $volume = null;
    $volume = 4/3 * pi() * pow($radius,3);
    $volume = round( $volume,2);

    echo"Circumference = {$circumference} cm <br>";
    echo"Area = {$area} cm^2 <br>";
    echo"Volume = {$volume} cm^3 <br>";
?>