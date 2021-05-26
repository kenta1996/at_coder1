<?php

fscanf(STDIN, "%d %d %d %d", $H, $W, $X, $Y);

$squares = [];
$count = 0;

for ($i = 0; $i < $H; $i++) {
    $squares[] = str_split(trim(fgets(STDIN)));
}

// 上方向
for ($i = $X - 1; $i >= 0; $i--) {
    if ($squares[$i][$Y - 1] === '#') {
        break;
    }
    $count++;
}

// 下方向
for ($i = $X - 1; $i <= $H - 1; $i++) {
    if ($squares[$i][$Y - 1] === '#') {
        break;
    }
    $count++;
}

// 左方向
for ($i = $Y - 1; $i >= 0; $i--) {
    if ($squares[$X - 1][$i] === '#') {
        break;
    }
    $count++;
}

// 右方向
for ($i = $Y - 1; $i <= $W - 1; $i++) {
    if ($squares[$X - 1][$i] === '#') {
        break;
    }
    $count++;
}

echo $count - 3;
