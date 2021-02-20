<?php
$stdin = trim(fgets(STDIN));  
$array = str_split($stdin);

$bad_flag = "";
foreach($array as $key => $e){
    if($key % 2 == 0){
        $ans1 = ctype_lower($e);
        if($ans1 != true){
            $bad_flag = true;
        }
    } else {
        $ans2 = ctype_upper($e);
        if($ans2 != true){
            $bad_flag = true;
        }
    }
    }

if ($bad_flag == true) {
	echo "No";
} else {
	echo "Yes";
}