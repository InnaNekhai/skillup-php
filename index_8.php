<?php
//Дана строка. Сделайте заглавным последний символ этой строки не используя цикл.
$str='ngfjtdkd';
$elem=substr($str,-1);
$elem=strtoupper($elem);
$str=substr_replace($str, $elem, -1);
var_dump($str);