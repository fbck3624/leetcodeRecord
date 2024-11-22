<?php
// https://leetcode.com/problems/hash-divided-string/
$s = "mxz";
$k = 3;
var_dump(stringHash($s, $k));
function stringHash($s, $k)
{
    $arr = str_split($s);
    $newString = '';
    for ($i = 0; $i < count($arr); $i += $k) {
        $sum = 0;
        for ($j = 0; $j < $k; $j++) {
            $sum += (ord($arr[$i + $j]) - ord('a'));
        }
        $newString .= chr($sum % 26 + ord('a'));
    }
    return $newString;
}
