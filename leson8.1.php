<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Одномерные массивы
    $nums = array(4, 5, 7, 2, 0, -23, 6); //создание массива данных
    $nums[1] = 45;
    echo $nums[1]. '<br>';

    $arr = [4, true, 6, "8", 0.4, 'c', 24, 16]; //так же создание масива с разными элементами по типу данных
    $arr[0] = "false";
    echo $arr[0]. '<br>';

    // Ассоциативные массивы

    $list = ["age" => 50, "name" => "Alex", "hobby" => "tanki"];
    $list["name"] = "Bob";
    echo $list["name"]. '<br>';

    // Многомерные массивы
    $matrix = [
            [4, 6.4, 8],
            [3, 2],
            [1, 5, 8, "9"]
    ];

    echo $matrix[0][1];
?>
</body>
</html>