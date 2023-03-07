<?php

session_start();

if (! isset($_SESSION['user']) ) {
    header('Location: /login.php');
    exit();
}

unset($_SESSION['user']);

header('Location: /login.php');
