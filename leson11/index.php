<?php
    $title = "Index";
    require "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
//    $file = fopen("text.txt", "a");

//    fwrite($file, "\nExample text php\nHello");

//    fclose($file);

    $filename = "text.txt";

    $file = fopen($filename, "r");
    
    $content = fread($file, filesize($filename));
    
    fclose($file);

    echo "<pre>".$content."</pre><br>";

    //file_put_contents("a.txt", "Example\nHello");
    echo file_get_contents("a.txt") . "<br>";

    echo file_exists("a.txt") . "<br>";
    //rename("a.txt", "new_name.txt");
    unlink("new_name.txt");

    echo fileperms(__FILE__);

    require_once "blocks/footer.php";
?>