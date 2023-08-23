<?php
    session_start();

    function redirect(){
        header('Location: contact.php');
        exit;
    }

    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['user_name'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 1) {
        $_SESSION['error_username'] = "Введите корректное имя";
        redirect();
    }
    else if(strlen($form) < 5 || strpos($form, "@") == false){
        $_SESSION['error_email'] = "Вы ввели некорректный email";
        redirect();
    }
    else if (strlen($subject) <= 5){
        $_SESSION['error_subject'] = "Тема сообщения не менее 5 символов";
        redirect();
    }
    else if (strlen($message) <= 15){
        $_SESSION['error_message'] = "Сообщения не менее 15 символов";
        redirect();
    }
    else{
        $_SESSION['error_username'] = "";
        $_SESSION['error_email'] = "";
        $_SESSION['error_subject'] = "";
        $_SESSION['error_message'] = "";
    }
    