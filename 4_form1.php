<?php
/**
 *   3. Спросите у пользователя email с помощью формы.
 * Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email)
 * при ее открытии поле email было автоматически заполнено.
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <label>
        Введите email
        <input type="email" name="email">
    </label>
    <input type="submit" value="ввод">
    <p>
        <a href="4_form2.php">Продолжить регистрацию</a>
    </p>
</form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['email'])){
    session_start();
    $_SESSION['email']=$_POST['email'];
}