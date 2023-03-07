<?php

session_start();

if(isset($_SESSION['user'])) {
    header('Location: /admin/index.php');
    exit(1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require ("controllers/auth/register.controller.php");

} else {

    require ("views/auth/register.view.php");

}
