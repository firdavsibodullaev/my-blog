<?php

$id = $_GET['id'];

$sql = "SELECT * FROM `news` WHERE `id` = '$id'";

$result = $db->query($sql);

$post = $result->fetch_assoc();

$banner = $post['banner'];

unlink(__DIR__ . "/../.." . $banner);

$sql = "DELETE FROM `news` WHERE `id`='$id'";

$db->query($sql);

header("Location: /admin/news.php");
