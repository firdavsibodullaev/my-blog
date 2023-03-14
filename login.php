<?php

require __DIR__ . "/config/helpers.php";

session_start();

if(auth_user()) {
    header('Location: /admin/index.php');
    exit(1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require ("controllers/auth/login.controller.php");

} else {

    require ("views/auth/login.view.php");

}
