<?php

$id = $_GET['id'];

$title = $_POST['title'];

$body = $_POST['body'];
$date = $_POST['publish_date'];

$sql = "UPDATE `news` SET 
`title` = '$title',
`body` = '$body',
`publish_date` = '$date'
WHERE `id` = '$id'";

$db->query($sql);

$db->close();


$_SESSION['message'] = "<b>$title</b> изменено!";

header("Location: /admin/news.php");
