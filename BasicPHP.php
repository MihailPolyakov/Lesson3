<?php
$x=rand(0,100);
echo"Число".$x;

$i=1;
$t=1;

while (true){
    if ($i>$x){
        echo "Задуманное число не входит в числовой ряд";
        break;
    }
    elseif ($i==$x){
        echo "Задуманное число входит в числовой ряд";
        break;
    }
    $d=$i;
    $i=$i+$t;
    $t=$d;
}
?>
