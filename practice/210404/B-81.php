<?php

$n = trim(fgets(STDIN));
for ($i=1; $i<=9; $i++) {
    for ($j=1; $j<=9; $j++) {
  	if($i * $j == $n){
        echo "Yes";
        return;
    }
    }
}
echo "No";




