<?php

session_start();

$_SESSION['user'] = 'somebody';
?>

<a href="session2.php">Прочитать юзера</a>