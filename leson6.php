<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a = 5;
    $str = "hello";

    $isWeatherGood = false;

    if($str != "hello" && !$isWeatherGood)
        echo 'first';
    else if($a == 5){
        $res = "second";
        echo $res;

        if($str == "hello"){
            echo "<br>Yes";
        }
    }
    else if($a > 50)
        echo '$a > 50';
    else if($a <= 45)
        echo '$a <= 45';
    else
        echo 'else';

?>
</body>
</html>