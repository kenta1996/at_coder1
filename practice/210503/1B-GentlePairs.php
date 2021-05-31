<?php

fscanf(STDIN, "%d", $N);
$arrayX = [];
$arrayY = [];
$count = 0;

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    $arrayX[] = $x;
    $arrayY[] = $y;
}

for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $slope = ($arrayY[$i] - $arrayY[$j]) / ($arrayX[$i] - $arrayX[$j]);
        if (-1 <= $slope && $slope <= 1) {
            $count++;
        }
    }
}

echo $count;
