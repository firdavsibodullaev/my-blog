<?php

require __DIR__ . "/../config/helpers.php";
require __DIR__ . "/../config/db.php";

session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM `news` WHERE `id` = '$id'";

dump($sql);