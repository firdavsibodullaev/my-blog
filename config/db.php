<?php

define("HOST", "127.0.0.1");
define("USERNAME", "root");
define("PASSWORD", "root");
define("DATABASE", "my-blog");

$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);

if ($db->connect_errno) {
    echo "Bazaga ulanib bo'lmadi: " . $db->connect_error;
    exit(1);
}
