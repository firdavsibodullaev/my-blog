<?php

$sql = "SELECT * FROM `news` ORDER BY `publish_date` DESC";

$result = $db->query($sql);

$news_list = $result->fetch_all(MYSQLI_ASSOC);

$db->close();

require __DIR__ . "/../../views/admin/news/list.view.php";