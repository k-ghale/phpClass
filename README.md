"D:\xampp\php\php.ini"
-- can be used to manage memory and practice before deployment in real world.

```
#<?php

    echo 'Hello World'

    $is_admin = true;

    if($is_admin){
        echo "<h1>Authorized User</h1>";
    }
    else{
        echo "<h1>Normal User</h1>";
    }


    $my_val = [1,2,3,4,5,6];
    $var = 90;
    echo"<pre>";
    var_dump($my_val);
    echo "</pre>";
    var_dump( $my_val );
    echo"<br>";
    print_r( $my_val );

?>
```