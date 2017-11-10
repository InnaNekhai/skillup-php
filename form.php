<?php
/**
 * @var array $user
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label{
            display: block;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>

<?php foreach ($errors as $error) { ?>
    <p class="error"><?=$error ?></p>
<?php } ?>

    <form action="index.php" method="post">
        <label>Имя <input name="first_name" value="<?=$user['first_name']?>"></label>
        <label>Фамилия <input name="last_name" value="<?=$user['last_name']?>"></label>
        <label>Email <input name="email" value="<?=$user['email']?>"></label>
        <label>Телефон <input name="phone" value="<?=$user['phone']?>"></label>
        <label>
            <input type="checkbox" name="confirm" <?=$user['confirm']? 'checked': ''?>>Я согласен с правилами сайта
        </label>
        <button type="submit">Зарегистрироваться</button>
    </form>

</body>
</html>