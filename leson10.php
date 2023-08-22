<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function info($word){
        echo "$word<br>";
    }

    function math($x, $y){
        return $x + $y;
    }

    $res_1 = math(4, 6);
    $res_2 = math(3, 2);

    info($res_1);
    info($res_2);

?>
</body>
</html>