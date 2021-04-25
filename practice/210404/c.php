<?php
  
$n= trim(fgets(STDIN));  
$s= trim(fgets(STDIN));
$f=substr($s,0,$n);
var_dump($f);

return;
$q= trim(fgets(STDIN));
$box1 = [];

for($i=0 ; $i < $q ; $i++){
	$array = explode(" ", fgets(STDIN));
    if($array[0] == 1){
        $s_arr = str_split($s);
        $a = $array[1] - 1;
        $a_str = $s_arr[$a];

        unset($s_arr[$a]);
        $b = $array[2] - 1;
        $b_str = $s_arr[$b];
        unset($s_arr[$b]);
        array_push($array1, $array2);
        //$s_arr[$a] = $b;
        //$s_arr[$b] = $a;
        array_splice($s_arr, $a, 0, $b);
        array_splice($s_arr, $b, 0, $a);
        var_dump("s_arr1");
        var_dump($s_arr);
    }else if($array[0] == 2){
        $s_arr = str_split($s);
        var_dump("s_arr111");
        var_dump($s_arr);
        $a = $n - 1;
        var_dump("a");
        var_dump($a);
        for ($i=0; $i<$a; $i++) {
            $box1[]
        }

        $a_str = $s_arr[$a];
        var_dump("a_str");
        var_dump($a_str);
        unset($s_arr[$a]);
        $b = $n - 1;
        $b_str = $s_arr[$b];
        unset($s_arr[$b]);
        array_splice($s_arr, $a, 0, $b);
        array_splice($s_arr, $b, 0, $a);
        var_dump("s_arr2");
        var_dump($s_arr);
        return;
    }
}
$ans = implode("", $s_arr);
echo $ans;
