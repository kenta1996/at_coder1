<?php
// 再起関数
$stdin = trim(fgets(STDIN));  
$array1 = str_split($stdin);

$args = 0;
abc($args);
function abc($args) {
    if ($args == 10) {
        var_dump($args);
        return $args;	
    }
    //abc 関数内で abc 関数を呼び出している
    return abc($args +1); 
}

?>