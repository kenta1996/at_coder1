<?php

$array = explode(" ", trim(fgets(STDIN)));
if(($array[0] * $array[0]) + ($array[1] * $array[1]) < ($array[2] * $array[2])){
	echo "Yes";
}else {
	echo "No";
}