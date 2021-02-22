<?php
// https://atcoder.jp/contests/abc191/submissions/20394054
fscanf(STDIN,'%d%d',$n,$x);
$array = explode(" ", trim(fgets(STDIN))); 
$result = array_diff($array, array($x));
$ans = implode(" ", $result);
echo $ans;