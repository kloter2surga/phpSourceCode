<?php
function isKaprekar($number) {
    $exp = pow($number, 2);
    $exp_str = (string) $exp;
    if (strlen($exp_str) <= 9) {
        $exp_str = '0' + $exp_str;
    }
    $mid = (int) (strlen($exp_str) / 2);
    $left = (int) substr($exp_str, 0, $mid);
    $right = (int) substr($exp_str, $mid);
    return $left + $right === $number;
}


var_dump(isKaprekar(45)); // Returns true since 45 is kaprekar
var_dump(isKaprekar(13)); // Returns false since 13 is not kaprekar
