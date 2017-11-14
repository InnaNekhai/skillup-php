<?php

include 'lib_email.php';

$user=[
    'name' => '',
    'email' => '',
];

$errors=[];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $user=processRequest($user);
    $errors = validateUser($user);

    if(!$errors){
        saveUser($user);

        header('Location: /succes_email.html');
        exit();
    }
}


include 'form_email.php';