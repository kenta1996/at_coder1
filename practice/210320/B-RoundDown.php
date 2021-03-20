<?php

$stdin = trim(fgets(STDIN));  
$array1 = str_split($stdin);
$box = [];
foreach($array1 as $arr){
    if($arr == "."){
        break;
    }
    $box[] = $arr;
}

$ans = implode("", $box);
echo $ans;
return;