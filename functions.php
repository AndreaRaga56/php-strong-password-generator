<?php

function createNewPass($length){
    $num = "0123456789";
    $maiusc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusc = "abcdefghijklmnopqrstuvwxyz";
    $special = "!@#$%^&*()+-=[]{}|_.<>?";
    $pass="";
    for ($i = 0; $i < $length; $i++) {
        $x=str_shuffle($num);
        $pass.= substr($x, 0, 1);
    }
    return $pass;
}
?>