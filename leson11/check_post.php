<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == "")
        echo "вы не ввели имя пользователя";
    else if(strlen(trim($name)) <= 1)
        echo "Такого имени не существует";
    else if(trim($email) == "" || trim($pass) == "" || trim($_POST['massage']) == "")
        echo "Введите все данные";
    else {
//        $$_POST['password'] = md5($pass); // хеширование пароля
//       echo "<h1>Все данные</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[massage]</p>";
        
//        foreach($_POST as $key => $value)
//            echo "<p>$value</p>";

        header('location: about.php');
        exit;
    }