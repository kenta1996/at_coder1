<?php

fscanf(STDIN,'%d%d',$a,$b);
fscanf(STDIN,'%d%d',$c,$d);
if ($a >= $b && $c >= $d) {
        $ans = $a - $d;
        echo $ans;
} else if ($a >= $b && $c <= $d) {
        $ans = $a - $c;
        echo $ans;
}else if ($a <= $b && $c >= $d) {
        $ans = $b - $d;
        echo $ans;
}else if ($a <= $b && $c <= $d) {
        $ans = $b - $c;
        echo $ans;
}
