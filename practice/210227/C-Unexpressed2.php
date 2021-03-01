<?php

fscanf(STDIN,'%d',$n);
$ok = 0;

$check_array = [];
$ok_array = [];
//挑戦できる回数繰り替える
$i = 2;
//$iを1ずつ足していく
while ($i * $i <= $n) {
    $j = 2;
    while (pow($i, $j) <= $n) {
        $num = $i ** $j; 
        $ok_array[] = $num;
        ++$j;
    }
    ++$i;
}
echo $n - count(array_unique($ok_array));