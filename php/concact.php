<?php 
session_start();
require_once "blocks/header.php";

?>

<form action="check_contact.php" method="post">
<input type="text" name="username" placeholder="Введите имя" class="form_control" value="<?=$_SESSION['username']?>">
<div class="text-danger"><?=$_SESSION['error_username']?></div><br>
<input type="email" name="email" placeholder="Введите email" class="form_control" value="<?=$_SESSION['email']?>">
<div class="text-danger"><?=$_SESSION['error_email']?></div><br>
<input type="text" name="subject" placeholder="Тема сообщения" class="form_control" value="<?=$_SESSION['subject']?>">
<div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
<textarea name="message"  placeholder="Введите сообщение" class="form-control"> <?=$_SESSION['message']?></textarea>
<div class="text-danger"><?=$_SESSION['error_message']?></div><br>
<button type="sybmit" class="btn btn-success"> Отправить </button>
</form>
<?php 
    require 'blocks/footer.php';
?>