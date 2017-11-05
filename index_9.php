<?php

$var = 1;
$result = 0;

while ($var<=100){
    $result += $var;
    $var++;
}

echo $result .PHP_EOL;



$var = 1;
$result = 0;

for ($var=1; $var <=100; $var++){
    echo $result+=$var .PHP_EOL;
}