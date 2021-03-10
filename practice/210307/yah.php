<?php
$cals = explode(" ", trim(fgets(STDIN)));
$names = explode(" ", trim(fgets(STDIN)));

$key_box = [];
$cal_box = [];
foreach($names as $key => $name) {
  // Aliceの場合の添字を取得
	if("Alice"==  $name){
        $key_box[] = $key;
    }
}

foreach($cals as $i => $cal) {
  foreach($key_box as $j => $key_b) {
      // Aliceの添字と同じ値を取得
      if($i == $key_b){
        $cal_box[] = $cal;
      }
  }
}
$ans = array_sum($cal_box);
echo $ans;
