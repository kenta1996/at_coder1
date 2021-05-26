<?php

$array = explode(" ", trim(fgets(STDIN)));
$n = $array[0];
$k = $array[1];
//200で割り切れるなら
for ($i=0; $i<$k; $i++) {
    if($n % 200 == 0){
        $n = $n / 200;
    }else{
        $n = $n."200";
    }
}

echo $n;