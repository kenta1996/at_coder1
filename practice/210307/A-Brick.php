<?php
$array = explode(" ", trim(fgets(STDIN)));
$ans = $array[0]/$array[1]; 
echo floor($ans);
?>