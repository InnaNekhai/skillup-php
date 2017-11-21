<?php
    include 'init.php';
    $error='';
    if (isset($_POST['username'])){
        if ($_POST['username']=='user' && $_POST['password']==pass){
            $_POST['user']=$_POST['username'];

            header('Location: index.php');
            exit();

        }
        else {
            $_error = 'Неверное имя пользователя или пароль';
            unset($_SESSION['user']);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
Вход
<?= $error ?>

<form method="post">
    <label>
        <input name="username">
    </label>
    <label>
        <input type="password" name="pass">
    </label>
    <button type="submit">Login</button>

</form>
</body>
</html>

