<?php

session_start();

if (!isset($_SESSION['user']) && $_SERVER['REQUEST_URI'] != '/Login.php') {
    header('Location: Login.php');
    exit();
}

