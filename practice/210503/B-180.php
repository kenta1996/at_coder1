<?php

$ns = trim(fgets(STDIN));  
$array1 = str_split($ns);
$box = [];
foreach($array1 as $arr){
	if($arr ==6){
        $box[] = 9;
    }else if($arr ==9){
        $box[] = 6;
    }else{
        $box[] = $arr;
    }
}
$reversed = array_reverse($box);
$ans = implode("", $reversed);
echo($ans);
