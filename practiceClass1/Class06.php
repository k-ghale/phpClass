<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 06</title>
</head>
<body>

<form action="Class06.php" method="post">
    <label>Quantity : </label><br >
    <input type="text" name="quantity">
    <input type="submit" value="total">
</form>

</body>
</html>
<?php
    $item = "pizza";
    $prize = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $prize;

    echo" You have ordered {$quantity} X {$item}/s <br>";
    echo" Your total is : \${$total}";
?>