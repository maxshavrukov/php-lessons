<?php
    $title = "About";
    require "blocks/header.php";
?>
<div class="container mt-2">
    <h1>Про нас</h1>

    <form action = "check_get.php" method = "get">
        <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <textarea name="massage" class="form-control" placeholder="Введите сообщение"></textarea>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>

</div>
<?php
    require "blocks/footer.php";
?>