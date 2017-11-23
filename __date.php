<?php
//14  Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату.
/**
 * @var $date;
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <form action="Task14.php" method="post">
        <label>
            <p>Введите дату в формате "2025-12-31"</p>
            <input type="text" name="date" value="<?=$date?>">
        </label>
        <label>
            <button type="submit">Отправить</button>
        </label>
    </form>
</body>
</html>

