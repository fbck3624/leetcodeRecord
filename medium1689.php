<?php
// https://leetcode.com/problems/partitioning-into-minimum-number-of-deci-binary-numbers/description/
/**
 * @param String $n
 * @return Integer
 */
function minPartitions($n)
{
    for ($i = 9; $i > 0; $i--) {
        if (str_contains($n, $i)) {
            return $i;
        }
    }
}
