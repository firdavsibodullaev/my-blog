<?php

$file = $_FILES["banner"];
$title = $_POST["title"];
$body = $_POST["body"];
$publish_date = $_POST["publish_date"];
$user_id = auth_user()["id"];
$banner = "";

if ($file["error"] == 0) {
    $from = $file["tmp_name"];
    $to = "/assets/uploads/news/" . time() . $file["name"];

    $uploaded_file = move_uploaded_file($from, __DIR__ . "/../.." . $to);

    if ($uploaded_file) {
        $banner = $to;
    }
} else {
    $_SESSION["error_message"] = "Файл не загрузился";
    header("Location: /admin/news-create.php");
    exit();
}


$sql = "INSERT INTO `news` (`title`, `body`, `publish_date`, `user_id`, `banner`) 
VALUES ('$title', '$body', '$publish_date', '$user_id', '$banner')";

$result = $db->query($sql);

$db->close();

header("Location: /admin/news.php");
