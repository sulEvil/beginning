<?php
    $login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);


if(mb_strlen($login) < 4 || mb_strlen($login) > 20) {
    setcookie('errorLogin', "ОшибкаЛогин", time() + 2, "/");   
    header("Location: /index.php?page=signUp"); 
    exit();
} elseif(mb_strlen($name) <= 1 || mb_strlen($name) > 25) {    
    setcookie('errorName', "ОшибкаИмя", time() + 2, "/");
    header("Location: /index.php?page=signUp");
        
    exit();
} elseif(mb_strlen($pass) < 4 || mb_strlen($pass) > 20) {    
    setcookie('errorPass', "ОшибкаПароль", time() + 2, "/");
    header("Location: /index.php?page=signUp");
    
    exit();
}
setcookie('succesfulreg', "succesful", time() + 5, "/");
$pass = md5($pass."block");

$mysql = new mysqli("127.0.0.1", "root", "root", "weow");
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
$mysql->close();

header("Location: /index.php?page=logIn");

?>