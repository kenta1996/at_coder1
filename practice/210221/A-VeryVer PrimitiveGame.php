<?php
fscanf(STDIN,'%d%d%d',$a,$b,$c);

if ($c == 0) {
    $a -= 1;
} else {
    $b -= 1;
}
$ans = $a - $b;
if ($ans > 0) {
	echo "Takahashi";
} else if ($ans < 0) {
	echo "Aoki";
} else if ($c == 0) {
	echo "Takahashi";
} else {
	echo "Aoki";
}

