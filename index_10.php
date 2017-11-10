<?php
//Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: ['a'=>1, 'b'=>2...]. Сделайте это не используя цикл.

$arr_values=range(1,26);
$arr_keys=range(a,z);
$result=array_combine($arr_keys, $arr_values);
var_dump($result);