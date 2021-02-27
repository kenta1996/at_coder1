<?php

fscanf(STDIN,'%d',$n);
$ok = 0;

$check_array = [];
$ok_array = [];
//挑戦できる回数繰り替える
for ($i=2; $i<=$n; $i++) {
    for ($j=2; $j<=$n; $j++) {
        $num = $i ** $j; 
        if ($num <= $n) {
            $ok_array[] = $num;  
        }else if ($num > $n){
            break;
        }
    }
}
$ok_array = array_unique($ok_array);
$cnt1 = count($ok_array);
$ans = $n - $cnt1;
echo $ans;