<?php

fscanf(STDIN,'%d',$n);
$array1 = explode(" ", trim(fgets(STDIN)));
$array2 = explode(" ", trim(fgets(STDIN)));

$box = [];
for ($i=0; $i<$n; $i++) {
	$box[] = $array1[$i] * $array2[$i];
}
$sum = array_sum($box);
if($sum === 0){
	echo "Yes";
}else {
	echo "No";
}
