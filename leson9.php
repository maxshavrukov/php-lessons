<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/* Создание переменной(обычно i), создаем значение (0), условия длительность цыкла (<10 будет работать), видоизменение переменной
(за каждый круг цикла переменная увел. на 1)
*/

    for($i = 100; $i >= 20; $i -= 5) //старт цикла с 100. будет выводить на экран новое число -5 (95, 90) до 20
        echo $i . '<br>';

    // будет выводить с 1 до 10
    $i = 1;
    while($i <= 10){
        echo $i . '<br>';
        $i++;

    }
    // выведет просто 100, так как условие специально так сделано. если вместо 10 поставить 101, то будет бесконечный цикл
    $i = 100;
    do{
        echo $i;
    }while($i < 10);

?>
</body>
</html>