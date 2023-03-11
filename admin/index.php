<?php

require __DIR__ . "/../config/helpers.php";

session_start();

if (! auth_user() ) {
    header('Location: /login.php');
    exit();
}

require('../views/admin/index.view.php');
