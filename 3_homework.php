<?php

/**
 * 7. Покажите пользователю баннер с кнопкой 'Не показывать больше!'.
 * Если он нажмет на эту кнопку - не показывайте ему баннер в течении месяца.
 */


echo 'Главная страница';

setcookie('blockBanner', '', time());

if (($_SERVER['REQUEST_METHOD']=='POST') && ($_POST['dontShow']='block')){
    setcookie('blockBanner', 'blocked', strtotime('+1 month'));
}

if (!$_COOKIE['blockBanner']){
    include '3_banner.php';
}



