<?php
/* 3. Установите куку с именем age. Запишите туда случайное число от 10 до 70 (с помощью mt_rand).
Сделайте так, чтобы эта кука установилась на 1 час, на 3 часа, на 1 день, на год, на 10 лет,
до конца текущего дня, до конца текущего года.*/

setcookie('age1', mt_rand(10,70), time()+3600);

setcookie('age2', mt_rand(10,70), time()+3*3600);

$period = strtotime('+ 1year');
setcookie('age3', mt_rand(10,70), $period);

$period = strtotime('+ 10year');
setcookie('age4', mt_rand(10,70), $period);

$period = mktime(23,59,59);
setcookie('age5', mt_rand(10,70), $period);

$period = mktime(23,59,59, 12,31);
setcookie('age6', mt_rand(10,70), $period);

