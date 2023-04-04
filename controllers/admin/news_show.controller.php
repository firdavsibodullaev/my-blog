<?php


$id = $_GET['id'];


// $sql = "SELECT * FROM `news` WHERE `id` = $id";

// dump($sql);

$sql = "SELECT `news`.*, 
COUNT(`likes`.`like`) AS `like`,
COUNT(`likes`.`dislike`) AS `dislike`,
`users`.first_name,
`users`.last_name 
FROM `news`
INNER JOIN `users` ON `news`.user_id = `users`.id
LEFT JOIN `likes` ON `news`.id = `likes`.post_id
WHERE `news`.id = $id
GROUP BY `news`.id";

$result = $db->query($sql);

$post = $result->fetch_assoc();

$count = $post['view_count'];

$comment_sql = "SELECT `comments`.*,
`users`.first_name,
`users`.last_name 
 FROM `comments`
INNER JOIN `users` ON `comments`.user_id = `users`.id
WHERE `post_id` = " . $post['id'];
$result = $db->query($comment_sql);

$comments = $result->fetch_all(MYSQLI_ASSOC);

require __DIR__ .'/../../views/admin/news/show.view.php';



// DOS, DDOS, SQL injection, XSS, CSRF, XCSRF