"D:\xampp\php\php.ini"
-- can be used to manage memory and practice before deployment in real world.

XAMPP will look for index.php file in directory specified.
```
#<?php

    echo 'Hello World'

    //Boolean
    $is_admin = true;

    //if-else Statement
    if($is_admin){
        echo "<h1>Authorized User</h1>";
    }
    else{
        echo "<h1>Normal User</h1>";
    }

    //Array in PHP
    $my_val = [1,2,3,4,5,6];

    //Variable in PHP
    $var = 90;

    //Can be Used to Print
    var_dump($my_val);

    //Another Way we print in PHP
    print_r( $my_val );

?>
```