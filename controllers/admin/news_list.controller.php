<?php

$sql = "SELECT `news`.*,
`users`.first_name,
`users`.last_name FROM `news` 
INNER JOIN `users` ON `news`.user_id = `users`.id
ORDER BY `publish_date` DESC";

$result = $db->query($sql);

$news_list = $result->fetch_all(MYSQLI_ASSOC);

$db->close();

require __DIR__ . "/../../views/admin/news/list.view.php";