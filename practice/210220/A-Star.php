<?php

fscanf(STDIN,'%d',$args);
abc($args);
function abc($args) {
    if ($args < 100) {
            $ans = 100 - $args;
            echo $ans;
            return;	
    }else {
            return abc($args - 100); 
    }
}