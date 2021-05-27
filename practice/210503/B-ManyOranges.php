<?php
  
fscanf(STDIN, "%d %d %d", $a, $b, $w);
$w = $w."000";
$result = "";
$max = floor($w / $a);
$min = ceil($w / $b);
if($max < $min){
	$result = "UNSATISFIABLE";
}else{
	$result = $min. ' '. $max;
}
echo $result;