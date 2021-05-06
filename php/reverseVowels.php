<?php
function reverseWovels(){
    $word = $_POST['texts'];
    preg_match_all("/[eyuioa]/i", $word, $matches);
    $vowels = $matches[0];

    foreach(str_split($word) as $i=>$c) {
        if(in_array($c, $matches[0])) {
            $word[$i] = array_pop($vowels);
        }
    }
    return $word;
}

print_r(reverseWovels()); ?>