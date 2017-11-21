<?php

$str = 'refdzf <dfdf> dfgd@mail.com gdfdg <fgf>  gfgdfgd gdfgd ';
$res = preg_match_all('/\w+@[\w-]+(\.\w+)+/i', $str, $match);
echo $res ? "Найдено" : 'Не найдено';
var_dump($match);

$replaced = preg_replace('/(\.[\w-]+)+/' , '.info' , $str);
echo $replaced . '<br>';

$replaced = preg_replace('/<(.*?)>/', '($1)', $str);
echo $replaced;
