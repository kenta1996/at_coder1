<?php
$array = explode(" ", trim(fgets(STDIN)));
$cnt1 = $array[0];
$arr = [];
//全部の値を同じ配列に入れる
for ($i=0; $i<$cnt1; $i++) {
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
        // 差分をいれていく
        $diff[] = $j - $min;
    }
}
echo array_sum($diff);

?>