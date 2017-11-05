<?php

$arr = [1, 2, 5, 9, 4, 13, 4, 10];

foreach ($arr as $elem){
    if ($elem==4){
        echo 'Есть!' .PHP_EOL;
        break;
    }
}