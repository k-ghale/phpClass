
<?php
    $temp = 24;
    $cloudy = false;

    if($temp < 0 || $temp > 30){
        echo"The weather is bad.";
    }
    else{
        echo "The weather is good.";
    }

    echo"<br>";

    if($temp >= 0 && $temp <= 30){
        echo"The weather is good.";
    }
    else{
        echo "The weather is bad.";
    }

    echo "<br>";

    if(!$cloudy){
        echo "It is not cloudy.";
    }
    else{
        echo "It is cloudy .";
    }

    echo "<br>";

    $age = 25;
    $citizen = true;

    if($age >= 18 && $citizen){
        echo "You can vote .";
    }
    else{
        echo "You cannot vote .";
    }

    echo "<br>";

    if(!$age >= 18 || !$citizen){
        echo "You cannot vote .";
    }
    else{
        echo "You can vote .";
    }

    echo "<br>";

    $child = false;
    $senior = true;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket} ";
?>