<?php

$n_1 = trim(fgets(STDIN));
$n_2 = strrev($n_1);
$ans = 'No';
for ($i=0; $i<10; $i++) {
	if ( $n_1 == $n_2 ) {
            $ans = 'Yes';
            break;
    } else {

    }
	$n_1 = '0'.$n_1;
    $n_2 = $n_2.'0';
}
echo $ans;
