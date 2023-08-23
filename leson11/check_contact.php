<?php
    session_start();

    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 1)
        $_SESSION['error_username'] = "Введите корректное имя";
    else if(strlen($form) < 5 || strpos($form, "@") == false)
        $_SESSION['error_email'] = "Вы ввели некорректный email";
    else if (strlen($subject) <= 5)
        $_SESSION['error_subject'] = "Тема сообщения не менее 5 символов";
    else if (strlen($message) <= 15)
        $_SESSION['error_message'] = "Сообщения не менее 15 символов";
    else{
        $_SESSION['error_username'] = "";
        $_SESSION['error_email'] = "";
        $_SESSION['error_sunject'] = "";
        $_SESSION['error_message'] = "";
    }
    