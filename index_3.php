<?php

//3. Выведите столбец чисел от 1 до 100 не используя цикл
$arr = range(1,100);
$str = implode('<br>', $arr);
print_r($str);
