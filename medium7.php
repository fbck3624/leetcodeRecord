<?php
// https://leetcode.com/problems/reverse-integer/
var_dump(reverse(-123));
/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x)
{
    $min = -pow(2, 31);
    $max = pow(2, 31) - 1;

    // 取得絕對值 & 字串反轉
    $newX = (int) strrev(abs($x));
    if ($x < 0) {
        $newX *= -1;
    }

    if ($newX > $max || $newX < $min) {
        return 0;
    }

    return $newX;
}
