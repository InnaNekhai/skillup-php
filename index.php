<?php

include 'lib.php';
include 'User.php';
include 'PremiumUser.php';

$user = new PremiumUser('Тест');
$user->firstName = "Петя";

$errors = [];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors = $user->processRequest($_POST);

    if (!$errors){
        saveUser2($user);

        header('Location: /success.html');
        exit();
    }
}

include "form.php";
