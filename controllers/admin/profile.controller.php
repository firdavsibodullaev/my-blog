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
$password = $_POST['password'] ? md5($_POST['password']) : $_SESSION['user']['password'];
$avatar = $_SESSION['user']['avatar'];

if ($_FILES['avatar']['error'] == 0) {
    $from = $_FILES['avatar']['tmp_name'];
    $to = "/assets/uploads/users/" . time() . $_FILES['avatar']['name'];
    $uploaded_file = move_uploaded_file($from, __DIR__ . "/../.." . $to);
    $avatar = $to;
}

$sql = "UPDATE `users` SET `last_name` = '$last_name', `first_name` = '$first_name', `login` = '$login', `password` = '$password', `avatar` = '$avatar' WHERE `id` = '". $_SESSION['user']['id'] ."'";
$db->query($sql);

header("Location: /admin/profile.php");