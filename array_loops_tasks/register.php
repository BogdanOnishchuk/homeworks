<?php
function saveForm($data,$serialize=0){
    if(!$serialize) {

        $str = '';
        foreach ($data as $key => $value) {
            $str .= "{$key}={$value}" . PHP_EOL;
        }
        echo $str;
        file_put_contents('form.dat', $str, FILE_APPEND);
    } else{
        $str=serialize($data);
        file_put_contents('serialize.dat', $str);
    }
}
if ($_GET){
    if(!isset($_GET['agree'])){
        die('вы не согласились');
    }
   saveForm($_GET,1);


    }
