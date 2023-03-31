<?php

session_start();

require __DIR__ . "/../config/helpers.php";
require __DIR__ . "/../config/db.php";

$post_id = $_GET['id'];
$user = auth_user();
$user_id = $user['id'];


$sql = "SELECT * FROM `likes` WHERE `post_id` = $post_id AND `user_id` = $user_id";

$result = $db->query($sql);

if ($result->num_rows == 0) {
    $sql = "INSERT INTO `likes` (`post_id`, `user_id`, `like`)
    VALUES ($post_id, $user_id, 1)";

    $db->query($sql);

} else {
    $_SESSION['error_message'] = "Oldin dislike yoki like bosgansiz";
}


$db->close();

header("Location: /admin/news-show.php?id=" . $_GET['id']);
