
<?php

$str=' many word in this ';
function top($str){
    $top=explode(" ",$str);
    echo strlen($str);
    print_r($top);
}
top($str);