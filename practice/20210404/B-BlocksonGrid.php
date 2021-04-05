<?php

fscanf(STDIN,'%d%d',$n,$m);
$box = [];
for ($i=0; $i<$n; $i++) {
	$array[$i] = explode(" ", trim(fgets(STDIN)));
  	//1列の配列に入れる
    for ($y=0; $y<$m; $y++) {
        $box[] = $array[$i][$y];
    }
}
//最小を取得
$min = min($box);
//すべての回数繰り返す
$l = $n * $m;
$diff = [];
for ($x=0; $x<$l; $x++) {
  	//最小の値との差分を取得
	if ($box[$x] !== $min) {
        $diff[] = $box[$x] - $min;
    }
}
//差分を全部足して表示
echo array_sum($diff);
