<?php
// https://atcoder.jp/contests/abc191/submissions/20393007
fscanf(STDIN,'%d%d%d%d',$v,$t,$s, $d);
if ($v * $t > $d || $v * $s < $d) {
	echo "Yes";
} else {
    echo "No";
}