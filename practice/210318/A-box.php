<?php

fscanf(STDIN,'%d%d%d',$n,$a,$b);
$left = $n -$a;
$ans = $left + $b;
echo $ans;