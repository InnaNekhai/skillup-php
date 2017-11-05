<?php

$num=1000;
$i=0;

while ($num>=50){
    $num/=2;
    $i++;
}

echo 'полученное число: ' .$num .PHP_EOL;
echo 'количество итераций: ' .$i .PHP_EOL;

$j=0;
for ($num=1000; $num>=50; $num/=2){
    $j++;
}
echo 'полученное число: ' .$num .PHP_EOL;
echo 'количество итераций: ' .$j .PHP_EOL;