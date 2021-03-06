<?php 

$array = explode(" ", trim(fgets(STDIN)));
$num1 = $array[0];
$num2 = $array[1];
$num3 = $num1 + $num2;
if ($num3 >= 15 && $num2 >= 8) {
	echo 1;
}else if ($num3 >= 10 && $num2 >= 3){
    echo 2;
}else if ($num3 >=3){
	echo 3;
} else {
    echo 4;
}
