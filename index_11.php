<?php

$arr = [-4, 5, 48, -9, -364, 45, 7];
$sum = 0;

foreach ($arr as $elem){
    if ($elem>0){
        $sum  +=$elem;
    }
}

echo $sum .PHP_EOL;