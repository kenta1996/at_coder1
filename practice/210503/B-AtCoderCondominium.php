<?php

fscanf(STDIN, "%d %d", $N, $K,);
$sum = 0;
for ($i=0; $i<$N; $i++) {
    for ($j=0; $j<$K; $j++) {
        $num = ($i+ 1)."0".($j+1);
        $sum = $sum + $num;
    }
}
echo $sum;

