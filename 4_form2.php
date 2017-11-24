<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 24.11.2017
 * Time: 16:33
 */

session_start();
$email=$_SESSION['email'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма_2</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label>
        Имя
        <input type="text" name="name">
    </label>
    <label>
        Фамилия
        <input type="text" name="firstName">
    </label>
    <label>
        Пароль
        <input type="password" name="password">
    </label>
    <label>
        Email
        <input type="email" name="email" value="<?=$email?>">
    </label>
    <button>Зарегистрироваться</button>
</form>

</body>
</html>
