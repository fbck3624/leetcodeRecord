<?php
// https://leetcode.com/problems/strictly-palindromic-number/description/
/**
 * @param Integer $n
 * @return Boolean
 */
function isStrictlyPalindromic($n)
{
    for ($i = 2; $i <= $n - 2; $i++) {
        $s = base_convert($n, 10, $i);
        if ($s !== strrev($s)) {
            return false;
        }
    }

    return true;
}
