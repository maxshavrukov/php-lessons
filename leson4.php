<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $x = 10;
    $y = 20;

    echo $x + $y.'<br>';
    echo $x - $y.'<br>';
    echo $x * $y.'<br>';
    echo $x / $y.'<br>';
    echo $x % $y.'<br>'; 

    $x += 10; // $x = $x + 10;
    $y -= 10; // $y = $y - 10;
    echo $x .'<br>';
    echo $y . '<br>';

    $x++; // $x += 1;
    $y--; // $y -= 1;

    echo M_PI.'<br>';
    echo M_E.'<br>';

    echo abs(num: -22).'<br>';
    echo ceil(3.1).'<br>';
    echo round(3.568795431, 2).'<br>';
    echo mt_rand(1, 20);
    
?>
</body>
</html>