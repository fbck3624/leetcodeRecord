<?php
// https://leetcode.com/problems/power-of-two/description/
/**
 * @param Integer $n
 * @return Boolean
 */
function isPowerOfTwo($n)
{
    return $n > 0 && ($n & ($n - 1)) == 0;
}
