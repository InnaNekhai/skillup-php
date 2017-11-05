<?php

$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $elem) {
    if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5') {
        echo $elem .PHP_EOL;
    }
}