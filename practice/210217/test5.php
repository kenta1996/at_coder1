<?php
// https://atcoder.jp/contests/abs/tasks/abc083_b
fscanf(STDIN,'%d%d%d',$n,$a,$b);

$cnt = 0;

for ($i=1; $i<=$n; $i++) {
    $q_1 = array_sum(str_split($i));
    // var_dump($q_1);
    if ($q_1 >= $a and $q_1 <= $b) {
        $cnt += $i;
    }
}
echo $cnt;

?>