<?php
$array = explode(" ", fgets(STDIN));
$num = $array[0];
$cnt = $array[1];
$cnt1 = 0;

for ($i=0; $i<$cnt; $i++) { 
    $array = str_split($num);
    arsort($array);
    $big = implode("", $array);
    $sml=strrev($big);
    $num = $big -$sml;
}
echo $num;

// ↓これは再起関数に頼りすぎている
// 大概for文で対処できそう
$array = explode(" ", fgets(STDIN));
$num = $array[0];
$cnt = $array[1];
$cnt1 = 0;

abc($num, $cnt ,$cnt1);
function abc($num, $cnt ,$cnt1) {
    $cnt1 += 1;
    $array = str_split($num);
    rsort($array);
    $big = implode("", $array);
    sort($array);
    $sml = implode("", $array);
    $num = $big - $sml;
    
    if ($cnt == $cnt1) {
        echo $num;
        return;
    }
    return abc($num, $cnt ,$cnt1); 
}




