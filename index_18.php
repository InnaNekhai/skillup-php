<?php

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];

foreach ($arr as $key=>$elem){
    $en[]=$key;
    $ru[]=$elem;
}

var_dump ($en);
var_dump ($ru);