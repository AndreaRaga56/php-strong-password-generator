<?php

function createNewPass($length, $string, $repetition){

    $pass = "";
    if ($repetition == 1) {
        for ($i = 0; $i < $length; $i++) {
            $x = str_shuffle($string);
            $pass .= substr($x, 0, 1);
        }
    } else {
        $x = str_shuffle($string);
        $pass = substr($x, 0, $length);
    }

    return $pass;
}


