<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<?php
    define($MY_AGE, 26);
    echo $MY_AGE . '<br>';

    $number = 5; // int - переменная целочисленных даннных
    // $number = 45;
    $num = -0.55; // float - переменная чисел с точкой

    $str = "Переменная"; // str - переменная с строками
    $bool = false; // boolean

    $a = 0.5;
    $b = "0.5";

    echo $a + floatval($b); // функция переводит к типу данных float

    echo $str . ': ' . $number . '. Var 2:' . $num;
?>

</body>
</html>