<?php
$str= $_GET['text'];
$str = iconv('utf-8', 'utf-16le', $str);
$str = strrev($str);
echo iconv('utf-16be', 'utf-8', $str);