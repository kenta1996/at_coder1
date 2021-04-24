<?php

$n= trim(fgets(STDIN));  
$array1 = explode(" ", trim(fgets(STDIN)));
$array2 = explode(" ", trim(fgets(STDIN)));
$max = max($array1);
$min = min($array2);
$ans = $min- $max;
if($ans < 0){
	echo "0";
}else{
	echo $ans + 1;
}