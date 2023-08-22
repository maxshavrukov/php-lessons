<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Переборка массивов. По ключам и без ключей

  $list = [5, 7, 3, 8, "some", 45.7];

    for($i = 0; $i < count($list); $i++)
        echo "element $i: $list[$i]. <br>";


    $list2 = ["age" => 14, "name" => "Vova", "hobby" => "dota2"];
    
    foreach ($list2 as $item => $value){
        echo "key: $item. value: $value .<br>";
    }


    $arr = [5, 6, 8, 9];
    foreach($arr as $value)
        echo "value: $value <br>";

?>  
</body>
</html>