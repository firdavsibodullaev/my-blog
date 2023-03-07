<?php

$host = "127.0.0.1";
$username = "root";
$password = "root";
$database = "my-blog";

$db = new mysqli($host, $username, $password, $database);

if ($db->connect_errno) {
    echo "Bazaga ulanib bo'lmadi: " . $db->connect_error;
    exit(1);
}

$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = "SELECT * from `users` where `login` = '$login' AND `password` = '$password'";

$result = $db->query($sql);

if ($result->num_rows < 1) {
    $_SESSION['error_message'] = "Неправильный логин или пароль";
    header('Location: /login.php');
    exit(1);
}
$user = $result->fetch_assoc();
$result->close();
$db->close();

$_SESSION['user'] = $user;

header("Location: /admin/index.php");
