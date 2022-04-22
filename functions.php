<?php

function recursion($a){
    if($a<10){
        echo "$a\n";
        recursion($a+1);
    }
}
?>