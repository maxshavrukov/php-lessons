<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $str = "hello";
    echo "VAR: $str";
    echo "<input type = 'text'><br>";

    $length = strlen($str);
    echo strtoupper(trim("     some    <br>"));
    echo $length;

    echo md5("qwerty");
?>
</body>
</html>