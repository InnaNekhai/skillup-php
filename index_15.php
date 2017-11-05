<?php


$arr[1]='пн';
$arr[]='вт';
$arr[]='ср';
$arr[]='чт';
$arr[]='пт';
$arr[]='сб';
$arr[]='вс';

foreach ($arr as $elem){
    if ($elem == 'сб' || $elem == 'вс'){
        echo '<b>' .$elem .'</b>' .PHP_EOL;
    }  else {
        echo $elem .PHP_EOL;
    }
}