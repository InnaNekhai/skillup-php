<?php
//Дано число. Найдите сумму цифр этого числа не используя цикл.
$num="122214";
$arr=str_split($num, 1);
$result=array_sum($arr);
var_dump($result);