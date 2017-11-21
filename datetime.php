<?php

$time= new DateTime('next Friday 14:20');
echo $time->format('d.m.Y H:i:s') . '<br>';

$newTime = $time->add(new DateInterval('P3DT5M'));
echo $newTime->format('d.m.Y H:i:s') . '<br>';


$birthday = new DateTime('1990-10-13 9:10:00');
$age = $birthday->diff(new DateTime());
echo $age->format('%y лет %m месяце');


