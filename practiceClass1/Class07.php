<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 07</title>
</head>
<body>
    <form action="Class07.php" method="post">
        <label>X : </label>
        <input type="text" name="x"><br>

        <label>Y : </label>
        <input type="text" name="y"><br>

        <label>Z : </label>
        <input type="text" name="z"><br>

        <input type="submit" value="Total">
    </form>    
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;
    $total = $x + $y + $z;

    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total = pow($x,$y);
    // $total = max($x,$y,$z);
    // $total = min($x,$y,$z);
    // $total = pi();
    // $total = rand(1,10);


    echo"The total is : {$total}";
?>
