<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 4</title>
</head>
<body>
    <?php
        echo "Kabin Ghale";
    
        $admin = false;
        $var = 10;
        $arr = [1,2,3,4,5,6,7];

        if($admin == true){
            echo "<h1> Hello World.</h1>";
        }
        else{
            echo "<h2> Something went wrong!</h2>";
        }

        echo $var;
        echo "<pre>";
        var_dump($arr);

        // phpinfo();


        echo $_SERVER['HTTP_USER_AGENT'];

    ?>
</body>
</html>