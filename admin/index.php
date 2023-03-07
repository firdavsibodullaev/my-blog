<?php

session_start();

if (! isset($_SESSION['user']) ) {
    header('Location: /login.php');
    exit();
}

require('../views/admin/index.view.php');
