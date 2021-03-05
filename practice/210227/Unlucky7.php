<?php
// https://atcoder.jp/contests/abc186/tasks/abc186_c
fscanf(STDIN,'%d',$n);
$cnt = 1;
$cnt10 = [];
$cnt8 = [];
while($n >= $cnt){
	// 10進数で7に該当するものを取得
    $arr1 = str_split($cnt);
        if (in_array(7, $arr1)) {
		$cnt10[] = $cnt;
    }
    // 8進数で7に該当するものを取得
    $z8 = decoct($cnt);
    $arr2 = str_split($z8);
    if (in_array(7, $arr2)) {
        $a8 = octdec($z8);
		$cnt10[] = $a8;
    }
    ++$cnt;
}
echo $n - count(array_unique($cnt10));