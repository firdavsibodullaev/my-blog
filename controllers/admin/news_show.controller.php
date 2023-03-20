<?php


$id = $_GET['id'];

$sql = "SELECT * FROM `news` WHERE `id` = '$id'";

$result = $db->query($sql);

$post = $result->fetch_assoc();

require __DIR__ .'/../../views/admin/news/show.view.php';
