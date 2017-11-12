<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
    <style>
        td, th{
            border-style: solid;
            border-width: 1px;
            border-color: lightgrey;
            padding: 10px;
        }
        th{
            font-style: italic;
            color: gray;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Телефон</th>
    </tr>
    <?php
    $arrdata = file('user.txt'); //$arrdata - массив с инф. о пользователях, размещенной в строку

    foreach ($arrdata as $elem) {
        $elem = explode("\t", $elem);
        $data[]=$elem; //$data - двухмерный массив, инф. о каждом пользователе отражается в массиве
    }?>


    <?php foreach ($data as $key=>$elem){?>
        <tr>
        <td><?php print_r ($key+ 1);?></td>
        <?php foreach ($elem as $key2=>$elem1 ){?>
            <?php if ($key2<=3){ ?>
        <td><?php print_r($elem1 .PHP_EOL); ?></td>
            <?php } ?>
        <?php } ?>
    </tr>
    <?php } ?>

</table>

</body>
</html>
