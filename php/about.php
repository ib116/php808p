<?php 
$title = "О нас";
require "blocks/header.php";
?>
<div class="container">
    <h1 class=mt-5> О компании </h1>
<form action="chech_get.php" method="get">
    <input type="text" name="username" placeholder="Введите имя" class="form_control"><br>
    <input type="email" name="email" placeholder="Введите email" class="form_control"><br>
    <input type="password" name="password" placeholder="Введите пароль" class="form_control"><br>
    <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
    <input type="submit" class="btn btn-success" value="Отправить">
</Form>
</div>
<?php 
require "blocks/foother.php";
?>