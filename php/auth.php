<?php
$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);

$pass = md5($pass."block");



$mysql = new mysqli("127.0.0.1", "root", "root", "weow");
$loginerror = "Такой пользователь не найден!";
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(@count($user) == 0) {
    setcookie('loginerror', "Ошибка!", time() + 5, "/");
    header("Location: /index.php?page=logIn");
    exit();   
} 

setcookie('user', $user['name'], time() + 3600, "/");
header("Location: /");
?>