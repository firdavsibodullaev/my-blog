<?php

require __DIR__ . "/../../config/db.php";

$login = $_POST['login'];
$password = md5(md5($_POST['password']));

$sql = "SELECT * from `users` where `login` = '$login' AND `password` = '$password'";

$result = $db->query($sql);

if ($result->num_rows < 1) {
    $_SESSION['error_message'] = "Неправильный логин или пароль";
    header('Location: /login.php');
    exit();
}

$user = $result->fetch_assoc();
$result->close();
$db->close();

$_SESSION['user'] = $user;

header("Location: /admin");
