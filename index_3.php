<?php

$arr = [1, 2, 3, 4, 5];
$result = 0;

foreach ($arr as $elem){
    $result +=($elem*$elem);
}
echo $result .PHP_EOL;