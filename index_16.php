<?php

$arr[1]='пн';
$arr[]='вт';
$arr[]='ср';
$arr[]='чт';
$arr[]='пт';
$arr[]='сб';
$arr[]='вс';
$day='вс';

foreach ($arr as $elem){
    if ($elem == $day){
        echo '<i>' .$elem .'</i>' .PHP_EOL;
    }  else {
        echo $elem .PHP_EOL;
    }
}