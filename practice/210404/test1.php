<?php

$n = trim(fgets(STDIN));  
$first_messages = explode(" ", trim(fgets(STDIN)));
$m = trim(fgets(STDIN)); 
$l = trim(fgets(STDIN));
$pattern = '/#/'; 
$cnt = 0;
foreach($first_messages as $message){
    if ( preg_match( $pattern, $message ) ) {
        //#を削除してマッチさせるように変数に格納する
        $str = str_replace('#', '', $message);
        //見つかった場合は他の関数で処理の続きをやる
        abc($first_messages, $str,$m, $l, $cnt);
        return;
    }
    $cnt += 1;
}
//もし＃がない場合は配列を文字列に変換して表示させる
$ans_messages = implode(" ", $first_messages);
echo $ans_messages;
return;

$box = [];
$cnt_1 = 0;
function abc($first_messages, $str,$m, $l, $cnt){
    for ($i=0; $i<$m; $i++) {
        for ($j=0; $j<$l; $j++) {
            $second_messages = explode(" ", trim(fgets(STDIN)));
            $str_sec = str_replace('#', '', $second_messages[0]);
            //同じ＃以降の文字列があった場合
            if ($str_sec == $str) {
                //表示させたい箇所の変更
                $first_messages[$cnt] = $second_messages[1];
                $ans_messages = implode(" ", $first_messages);
                echo $ans_messages."\n";
            } else{
            //＃以降が一致しない場合は、以下の文字列を表示させる
                echo "Error: Lack of data"."\n";
            }
            //回答すべき回数と一致しない場合は繰り返す  
            if($j == ($l -1)){
                $l = trim(fgets(STDIN));
            }
        }
    }

}


