<?php

define('USERS_FILE', __DIR__.'/subscribers.txt');

function processRequest(array $user){
    foreach ($user as $key=>$value){
        $user[$key]=isset($_POST[$key])? $_POST[$key]: '';
    }
    return ($user);
}

function validateUser(array $user){
    $errors=[];

    if(!$user['email']){
        $errors[] = 'Введите email';
    }
    return ($errors);
}

function saveUser(array $user){
    if (file_exists(USERS_FILE)){
        $existing_users = file_get_contents(USERS_FILE);
    } else {
        $existing_users = '';
    }
    $user_info = implode("\t", $user);
    $existing_users.=$user_info .PHP_EOL;
    file_put_contents(USERS_FILE, $existing_users);
}