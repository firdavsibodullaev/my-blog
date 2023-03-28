<?php


$query = isset($_GET['query']) ? $_GET['query'] : null;

$sql = "SELECT `news`.*,
`users`.first_name,
`users`.last_name FROM `news` 
INNER JOIN `users` ON `news`.user_id = `users`.id";

// "SELECT * FROM `news` WHERE `title` = 'Post` ORDER BY `publish_date` DESC";

// post%
// %post
// %post%

// Bu Postlarimizni biri
// Bu menga kerak bo'lgan post
// Bu post bo'laveradi
// Bu bizning postimiz

if ($query) {
    $sql .= " WHERE `title` LIKE '%$query%'";
}


$sql .= " ORDER BY `publish_date` DESC";


$result = $db->query($sql);

$news_list = $result->fetch_all(MYSQLI_ASSOC);

$db->close();

require __DIR__ . "/../../views/admin/news/list.view.php";



// master

// cars

//   - master_id
