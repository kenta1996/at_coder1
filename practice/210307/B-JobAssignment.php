<?php
fscanf(STDIN, "%d", $N);
for($i=0;$i<$N;$i++){
  fscanf(STDIN, "%d %d", $a[$i],$b[$i]);
}

// 全部の値を配列に格納する
$time =[];
for($i=0;$i<$N;$i++){
  for($j=0;$j<$N;$j++){
    if($i==$j){
      //同一従業員
      $time[] = $a[$i]+$b[$i];
      continue;
    }
    //同一従業員でない
    $time[] = max([$a[$i],$b[$j]]);
  }
}

echo min($time);
?>