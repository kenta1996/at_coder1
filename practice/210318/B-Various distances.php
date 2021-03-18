<?php

fscanf(STDIN,'%d',$n);
$arrays = explode(" ", trim(fgets(STDIN)));

$sum = 0;
$ukuri = 0;
foreach ($arrays as $num) {
    $sum += abs($num);
   $ukuri += abs($num) * abs($num);
}

echo $sum."\n";

$ans = bcsqrt($ukuri, 15);
echo $ans."\n";

$max = max($arrays);
echo $max."\n";


