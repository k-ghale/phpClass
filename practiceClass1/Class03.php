<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 3</title>
</head>
<body>
    <?php
    echo "Kabin Ghale";

    $admin = true;
    $var = 10;
    $arr = [1, 2, 3, 4, 5, 6, 7];

    if ($admin == true) {
        echo "<h1> Hello Admin.</h1>";
    } else {
        echo "<h2> Something went wrong!</h2>";
    }

    echo $var;
    echo "<pre>";
    var_dump($arr);
    echo "<br>";

    $arr_length = count($arr);
    for ($i = 0; $i < $arr_length; $i++) {
        echo $arr[$i] . "<br>";
    }

    echo "<br>";
    for ($i = 0; $i < $arr_length; $i++) {
        if($arr[$i] % 2 == 0){
            echo "EVEN :".$arr[$i] ."<br>";
        }
        else{
            echo "ODD :".$arr[$i] ."<br>";
        }
    }

    echo "<br>";
    for ($i = 0; $i < 100; $i++) {
        if($i % 2 == 0){
            echo "EVEN :".$i ."<br>";
        }
        else{
            echo "ODD :".$i ."<br>";
        }
    }


    // phpinfo();
    
    // echo sizeof($arr);
    // echo "<br>";
    // echo count($arr);
    // echo "<br>";

    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];

    ?>
</body>

</html>