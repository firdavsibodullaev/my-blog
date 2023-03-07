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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$password = md5($_POST['password']);


$check_sql = "SELECT id from `users` where `login` = '$login'";

$result = $db->query($check_sql);
if ($result->num_rows > 0) {
    $_SESSION["error_message"] = "Такой пользователь существует"; 
    header('Location: /register.php');
    exit();
}

$sql = "INSERT into `users` (`last_name`, `first_name`, `login`, `password`) VALUES ('$last_name', '$first_name', '$login', '$password')";
$result = $db->query($sql);

$db->close();

header('location: /login.php');
