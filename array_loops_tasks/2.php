<?php
$arr=[1,20,15,17,24,35];
$sum=0;
foreach($arr as  $key=>$resault){
    $resault=array_sum($arr);
    echo $resault.'<br/>';break;


}