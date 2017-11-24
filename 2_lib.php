<?php


if (empty($_COOKIE['count'])){
    $num=1;
} else{
    $num=$_COOKIE['count'] + 1;
}

include '2_setcookie.php';