<?php
fscanf(STDIN,'%d%d',$n,$s);
$x = $n - $s;
$x = abs($x);

if ($x <= 2) {
	echo "Yes";
} else {
	echo "No";
}
