<?php
fscanf(STDIN,'%d',$n);
$array1 = explode(" ", trim(fgets(STDIN)));
$array2 = explode(" ", trim(fgets(STDIN)));

$ans_box = [];
for ($i=0; $i<$n; $i++) {
	$ans_box[] = $array1[$i] * $array2[$i];

}
$ans = array_sum($ans_box);
if ($ans == 0) {
	echo "Yes";
} else {
	echo "No";
}