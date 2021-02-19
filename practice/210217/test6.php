<?php
fscanf(STDIN,'%d',$n);
$array = explode(" ", trim(fgets(STDIN)));
rsort($array);
$answer = 0;
for ($i=0; $i<$n; $i++) {
  //偶数の場合(Alice)
  if($i % 2 === 0) {
    $answer = $answer + $array[$i];
  } else {
    $answer = $answer - $array[$i];
  }
}
echo $answer;

?>