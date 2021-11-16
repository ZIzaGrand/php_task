<?php

function solution($input){
    if (count($input) < 1)
        return -1;
    $boolArr = array_pad(array(), count($input), false);
    for ($i = 0; $i < count($input); $i++){
        if ($boolArr[$input[$i]-1])
            return $input[$i];
        else
            $boolArr[$input[$i]-1] = true;
    }
    return -1;
}