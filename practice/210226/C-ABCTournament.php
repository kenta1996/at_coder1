<?php
    $n = trim(fgets(STDIN));
    $a = explode(" ",trim(fgets(STDIN)));
    $b = $a;
    $a = array_chunk($a, 2**($n-1));
    $x = max($a[0])>max($a[1])?max($a[1]):max($a[0]);
    $result = array_search($x, $b);
    echo $result+1;