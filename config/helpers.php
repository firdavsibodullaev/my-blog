<?php

function show_errors() {
    if (isset($_SESSION['error_message'])) {
        echo "<div class=\"alert alert-danger\" role=\"alert\">";
        echo $_SESSION['error_message'];
        echo "</div>";
        unset($_SESSION['error_message']);
    }
}

function is_url($url) {
    if (rtrim($_SERVER['REQUEST_URI'], "/") == $url) {
        return "text-info";
    }

    return "text-white";
}

function dump($variable) {
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
    exit();
}

function auth_user() {

    if( isset($_SESSION['user']) ) {
        return $_SESSION['user'];
    }

    return false;
}

function is_method($method) {
    return $_SERVER["REQUEST_METHOD"] == strtoupper($method);
}

function show_message() {
    if (isset($_SESSION['message'])) {
        echo "<div class=\"alert alert-success\" role=\"alert\">";
        echo $_SESSION['message'];
        echo "</div>";

        unset($_SESSION['message']);
        
    }
}