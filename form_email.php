<?php
/**
 * @var array $user;
 * @var array $errors;
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <style>
        label {
            display: block;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php foreach ($errors as $error) { ?>
    <p class="error"><?= $error ?></p>
<?php } ?>


    <form action="index_email.php" method="POST" >
        <p><label>Имя <input name="name" value="<?= $user['name']?>" ></label></p>
        <p><label>Email <input name="email" type="email" value="<?= $user['email']?>" ></label></p>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>