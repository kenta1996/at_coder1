<?php
$n= trim(fgets(STDIN));
$array = str_split($n);
$ans = substr_count($n, "ZONe");
echo $ans;