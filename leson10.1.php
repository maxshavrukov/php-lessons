<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function summary($arr){
        $summa = 0;
        foreach($arr as $value){
            $summa += $value;
        }

        return $summa;
    }

    $list = [5, 7, 3];
    echo summary($list)."<br>";
    echo summary([5, 2, 3])."<br>";
    echo summary([7, 10, 10, 10])."<br>";

?>
</body>
</html>