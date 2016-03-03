<?php
echo "<pre>";
$str1 =  ($_POST ['a']);
$a=explode(" ",$str1);
$str2 =  ($_POST ['b']);
$b=explode(" ",$str2);
function getWords($a,$b){
    $result=array_intersect($a,$b);
    print_r($result);
}
getWords($a,$b);