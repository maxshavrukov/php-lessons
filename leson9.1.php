<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //Операторы цикла
    for($el = 100; $el > 10; $el /=2){
        if($el < 15)
            break;

        if($el % 2 == 0)
            continue;
            
        echo $el . '<br>';
    }

?>
</body>
</html>