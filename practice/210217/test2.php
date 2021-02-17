<?php
// https://atcoder.jp/contests/abs/tasks/abc081_b
$num = trim(fgets(STDIN)); 
$array = explode(" ", fgets(STDIN));

$cnt = 0;
abc($array, $num, $cnt);

function abc($array, $num, $cnt) {
    for ($i=0; $i<$num; $i++) {
        // 割り切れる場合は、2で割り次へ進む
        if ($array[$i] % 2 == 0){
            $array[$i] = $array[$i] / 2;
        } else {
            //割り切れない値がある時点の回数を表示させる
            echo $cnt;
            return;
        }
    }
    //同じ回数までしたら再度処理を実行する
    if ($i = $num) {
        $cnt += 1;
        return abc($array, $num, $cnt);
    }
}

?>