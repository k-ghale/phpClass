
<?php
    $age = 201;

    if($age >= 100){
        echo"You are too old .";
    }
    elseif($age > 18){
        echo"You are eligible .";
    }
    elseif($age == 0){
        echo "You were just born .";
    }
    elseif($age < 0){
        echo "Please enter a valid age .";
    }
    else{
        echo "You are not eligible .";
    }
    echo"<br>";

    $adult = false;
    if($adult){
        echo "You may enter this site .";
    }
    else{
        echo "You cannot enter this site .";
    }
    echo "<br>";

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "Your weekly pay is \${$weekly_pay}";

?>