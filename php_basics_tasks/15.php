<?php
$operator = "-";
$a = 5 ;
$b = 15;
$output = " ";

switch($operator){
    case '+':
        $output .= $a + $b;
        break;
    case '-':
        $output .= $a - $b;
        break;
    case '*':
        $output .= $a * $b;
        break;
    case '%':
        $output .= $a % $b;
        break;
    case '/':
        if($b == 0)
            $output = "Ділити на нуль не можна";
        else
            $output .= $a / $b;
        break;
}
echo $output;
?>
