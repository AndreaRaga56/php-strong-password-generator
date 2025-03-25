<?php
function createNewPass($length){
    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';
    $pass="";
    for ($i = 0; $i < $length; $i++) {
        $x=str_shuffle($char);
        $pass.= substr($x, 0, 1);
    }
    return $pass;
}
?>