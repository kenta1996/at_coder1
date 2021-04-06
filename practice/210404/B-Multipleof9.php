<?php

$n = trim(fgets(STDIN));
$arr = str_split($n);
$a_len = strlen($n);

$sum = 0;
for ($i=0; $i<$a_len; $i++) {
	$sum = $sum + $arr[$i];
}
if($sum % 9 === 0){
    echo "Yes";
}else{
	echo "No";
}



