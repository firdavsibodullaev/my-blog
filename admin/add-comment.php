<?php

session_start();

require __DIR__ . "/../config/db.php";
require __DIR__ . "/../config/helpers.php";

$comment = $_POST['comment'];
$user_id = $_SESSION['user']['id'];
$post_id = $_POST['post_id'];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO `comments` (`post_id`, `user_id`, `text`, `date`)
VALUES ($post_id, $user_id, '$comment', '$date')";


$db->query($sql);
$db->close();

header("Location: /admin/news-show.php?id=" . $post_id);