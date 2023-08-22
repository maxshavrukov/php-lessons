<?php
    $title = "Index";
    require "blocks/header.php";
?>
<h1>Главная страница</h1>
<?php
    $lis = [5, 7, 3, 6, 7, 8];
    unset($lis[1]);
    $lis = array_values($lis);
    rsort($lis);

    $arr = array_splice($lis, 2, 2);
    print_r($arr);
    echo "<br>";

    $arr_1 = [5,7];
    $arr_2 = [6, 8, 9];
    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);
    echo "<br>";


//    if (in_array(3, $lis) == "")
//        echo "not found";
//    else
//        echo "found";

    print_r($lis);

    echo "<br>";

    $x = "10";
    echo gettype($x). "<br>";
    echo is_numeric($x). "<br>";
    echo is_array($x). "<br>";

    $str = "example";
    echo strpos($str, "am") . "<br>";

    $words = "john, bob, alex";
    $arr_words = explode(",", $words);
    print_r($arr_words);
    echo '<br>' .implode(" | ", $arr_words);

    require "blocks/footer.php";
?>