<?php 
$name = $_GET=['username'];
$email = $_GET=['email'];
$pass = $_GET=['password'];

if (trim($name) == "")
    echo "Вы не ввели имя пользователя";
else if (strlen(trim($name)) <=1)
    echo "Такого имени не существует";
else if (trim($email) == "" || trim($pass) == "" || trim($_POST[message]) == "")
    echo "Заполните пустые поля";
else {
   $_GET['passowrd'] = sha1($pass);
   echo "<h1>Все данные</h1>";
   foreach ($_GET as $key => $value)
   echo "<p>$value</p>";
}