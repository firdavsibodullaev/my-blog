<?php


$id = $_GET['id'];


$sql = "SELECT `news`.*,
`users`.first_name,
`users`.last_name FROM `news` 
INNER JOIN `users` ON `news`.user_id = `users`.id
WHERE `news`.id = '$id'";

$result = $db->query($sql);

$post = $result->fetch_assoc();

$count = $post['view_count'];

require __DIR__ .'/../../views/admin/news/show.view.php';
