<?php

$arr = ['Kolya'=>'200', 'Vasya'=>'300', 'Petya'=>'400'];

foreach ($arr as $key=>$elem){
    echo $key .' - salary ' .$elem .' dollars' .PHP_EOL;
}