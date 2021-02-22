<?php
fscanf(STDIN,'%d%d%d',$n,$s,$d);
while ($line = fgets(STDIN)) {
$tmp[] = trim($line);
}
$cnt = 0;
  //var_dump($array);
for ($i=0; $i<$n; $i++) {
	$array = explode(" ", $tmp[$i]);
	if ($array[0] < $s && $array[1] > $d) {
        $cnt += 1;
    }
}
if ($cnt == 0){
    echo "No";
} else {
	echo "Yes";
}
