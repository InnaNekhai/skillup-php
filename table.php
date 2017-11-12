<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей</title>
</head>
<body>

<table>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Email</th>
        <th>Телефон</th>
    </tr>
    <?php
    $arrdate = file('user.txt');
 /*   foreach ($arrdate as $elem){
        $elem = explode(' ', $elem);
    }
var_dump($arrdate);*/
    echo $arrdate[1];
    ?>

</table>


</body>
</html>
