<?php
// https://atcoder.jp/contests/abs/tasks
$num1 = trim(fgets(STDIN));
$num2 = trim(fgets(STDIN));
$num3 = trim(fgets(STDIN));
$money = trim(fgets(STDIN));
$cnt = 0;

for ($i=0; $i<=$num1; $i++) {
    for ($j=0; $j<=$num2; $j++) {
        for ($k=0; $k<=$num3; $k++) {
        if(500*$i + 100*$j + 50*$k == $money){
            $cnt++;
        }
        }
    }
}
echo $cnt;
?>