<?php


if ($_SERVER['REQUEST_METHOD']=='POST'){
    $date=$_POST["date"];
    }

//echo $date;
$arrDate=explode('-',$date);
//var_dump($arrDate);

$timeStamp = mktime(0,0,0, $arrDate[1], $arrDate[2], $arrDate[0] ) ;

echo '<p>';

echo date('F', $timeStamp);

include '__date.php';