<?php

$ns = trim(fgets(STDIN));
$names = [];
$heights = [];
$array = [];
$max = "";
for ($i=0; $i<$ns; $i++) {
    $array[] = explode(" ", trim(fgets(STDIN))); 
  //$names[] = $array[0];
  //$heights[] = $array[1];
}

$ids = array_column($array, '1');
// idの昇順（SORT_ASC）に並び替える.
array_multisort($ids, SORT_DESC, $array);
// 2番目に高い数値を表示
echo $array[1][0];

return;
array_multisort($heights, SORT_DESC, $names);
var_dump($names);
var_dump($heights);
echo $names[1];
