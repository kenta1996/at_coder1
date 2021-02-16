<?php

// 青木君がボールを打つことができるなら Yes を、できないなら No を出力せよ。
// V S T D

$V = "";
$S = "";
$T = "";
$D = "";
if ($D < ($S * $V) or $D < ($T * $V)) {
    echo "yes";
} else {
    echo "no";
}

