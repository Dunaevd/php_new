<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Hello";
//phpinfo();
$a = 5;
$b = 6;
$v = $a + $b;
//рекурсия
function recursion($num){
    if ($num >= 10) {
        ?><p><?=($num);?></p>
        <?php 
        $num--;
        recursion($num);
    }else echo '$num < 10';
     return;
}

recursion(15);

?>
<hr>
<?php

function factorial($number){
    if ($number <= 1) {
        return 1;
    }else return $number * factorial($number - 1);
}

echo factorial(10);

//phpinfo();

?>
