<?php
// https://leetcode.com/problems/minimum-length-of-string-after-deleting-similar-ends/description/
$s = "ca";
var_dump($s);
/**
 * @param String $s
 * @return Integer
 */
function minimumLength($s)
{
    $left = 0;
    $right = strlen($s) - 1;

    // 找到左右相同字元
    while ($left < $right && $s[$left] === $s[$right]) {
        $char = $s[$left];

        // 找到左邊相同字元的最長長度
        while ($left < $right && $s[$left] === $char) {
            $left++;
        }

        // 找到右邊相同字元的最長長度
        while ($left <= $right && $s[$right] === $char) {
            $right--;
        }
    }

    return $right - $left + 1;
}
