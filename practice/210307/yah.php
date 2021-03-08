<?php
$cals = explode(" ", trim(fgets(STDIN)));
$names = explode(" ", trim(fgets(STDIN)));

$key_box = [];
$cal_box = [];
foreach($names as $key => $name) {
	if("Alice"==  $name){
        $key_box[] = $key;
    }
}

foreach($cals as $i => $cal) {
  foreach($key_box as $j => $key_b) {
      if($i == $key_b){
        $cal_box[] = $cal;
      }
  }
}
$ans = array_sum($cal_box);
echo $ans;
