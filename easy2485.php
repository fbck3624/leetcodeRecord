<?php
// https://leetcode.com/problems/find-the-pivot-integer/description/

/**
 * @param Integer $n
 * @return Integer
 */
function pivotInteger($n)
{
    if ($n == 1) {
        return 1;
    }
    for ($i = 2; $i <= $n; $i++) {
        if ((($i + 1) * $i) / 2 == (($n + $i) * ($n - $i + 1)) / 2) {
            return $i;
        }
    }

    return -1;
}
