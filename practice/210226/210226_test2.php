<!-- https://atcoder.jp/contests/abs/tasks/abc086_a -->

<?php
$array1 = explode(" ", trim(fgets(STDIN)));
$asnwer1 = $array1[0] * $array1[1];
if (0 == $asnwer1 % 2) {
	// 偶数
	echo "Even";
} else {
	// 奇数
	echo "Odd";
}
?>