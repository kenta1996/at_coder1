<?php

fscanf(STDIN,'%d%d',$n,$a);
$ans = 100 * ($a / $n);
$ans1 = 100 - $ans;
echo $ans1;