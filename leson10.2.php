<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function info(){
        global $x;
        $x = 0;
    }

    function click(){
        static $count;
        $count++;
        echo $count. '<br>';

    }

    click();
    click();
    click();

//    $x = 10;
//  info();
//    echo $x;

?>
    
</body>
</html>