<?php

require __DIR__ . "/config/helpers.php";

session_start();

if ( auth_user() ) {
    unset($_SESSION['user']);

    header('Location: /login.php');
} else {
    header('Location: /login.php');
    exit();
}
