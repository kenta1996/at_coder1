<!-- https://atcoder.jp/contests/abs/tasks/abc081_a -->

<?php
    $stdin = trim(fgets(STDIN));  
    $array1 = str_split($stdin);
    $cnt = 0;
    if ($array1[0] == 1) {
        $cnt += 1;
    }
    if ($array1[1] == 1) {
        $cnt += 1;
    }
    if ($array1[2] == 1) {
        $cnt += 1;
    }
    echo $cnt;

?>