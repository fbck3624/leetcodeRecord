<?php
// https://leetcode.com/problems/convert-an-array-into-a-2d-array-with-conditions/description/
/**
 * @param Integer[] $nums
 * @return Integer[][]
 */
function findMatrix($nums)
{
    $result = [];
    while ($nums !== []) {
        $key = 0;
        $merge = [];
        foreach ($nums as $index => $num) {
            if (!isset($merge[$num])) {
                $merge[$num] = $key;
                $key++;
                unset($nums[$index]);
            }
        }
        $result[] = array_flip($merge);
    }

    return $result;
}
