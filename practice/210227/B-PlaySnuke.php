<?php

fscanf(STDIN,'%d',$n);
while ($line = fgets(STDIN)) {
	$tmp[] = trim($line);
}
$cheap = "";
//挑戦できる回数繰り替える
for ($i=0; $i<$n; $i++) {
	$array = explode(" ", $tmp[$i]);
	if ($array[0] < $array[2]) {
        if (!empty($cheap)){
            if ($array[1] < $cheap) {
            $cheap = $array[1];
            }
        }else{
            $cheap = $array[1];
        }
        
    }
}
if (!empty($cheap)) {
        echo $cheap;
} else {
echo -1;
}