<?php

// 文字数をカウントして数を返す関数を書いてください
// Parameter: 文字列
// Return Value: 数値

$ns = trim(fgets(STDIN));  
$array1 = str_split($ns);
$cnt = 0;
foreach ($array1 as $array) {
    $cnt = $cnt + 1;
}
return $cnt;


// int a = 1; int b = 2; の時、a と b の値を入れ替えてください
$a = 1;
$b = 2;
// $c = [];
// $d = [];
// $boxs = [];
// $boxs[] = array_push($a);
// $boxs[] = array_push($b);
// $boxs

$c = $a;
$a = $b;
$b = $c;

$a = $a + 1;
$b = $b - 1;



// foreach ($boxs as $box) {
//     $tmp = $boxs;
//     $c[] = $box; //$a;
//     $tmp
    
// }








