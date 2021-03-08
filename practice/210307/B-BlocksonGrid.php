<?php
$array = explode(" ", trim(fgets(STDIN)));
$cnts1 = $array[0];
$cnts2 = $array[1];
$arr = [];
//全部の値を同じ配列に入れる
for ($i=0; $i<$cnts1; $i++) {
    $arr_1 = explode(" ", trim(fgets(STDIN)));
    foreach($arr_1 as $n) {
    $arr[] = $n;
    }
}
$min = min($arr);
$diff = [];
//最小の値から差分を足す
foreach ($arr as $j) {
	if ($min !== $j) {
        $diff[] = $j - $min;
    }
}
echo array_sum($diff);

?>