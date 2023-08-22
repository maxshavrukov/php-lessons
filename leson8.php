<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nums = array(4, 5, 7, 2, 0, -23, 6); //создание массива данных
    $nums[1] = 45;
    echo $nums[1]. '<br>';

    $arr = [4, true, 6, "8", 0.4, 'c', 24, 16]; //так же создание масива с разными элементами по типу данных
    $arr[0] = "false";
    echo $arr[0]. '<br>';

    $list = ["age" => 50, "name" => "Alex", "hobby" => "tanki"];
    $list["name"] = "Bob";
    echo $list["name"];
?>
</body>
</html>