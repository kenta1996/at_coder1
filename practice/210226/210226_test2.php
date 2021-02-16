<!-- https://atcoder.jp/contests/abs/tasks/abc086_a -->

<?php
# 整数の入力
$array1 = explode(" ", trim(fgets(STDIN)));
$asnwer1 = $array1[0] * $array1[1];
if (0 == $asnwer1 % 2) {
	echo "Even";
} else {
	echo "Odd";
}

?>