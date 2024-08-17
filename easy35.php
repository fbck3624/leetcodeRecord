<?php
// https://leetcode.com/problems/search-insert-position/description/
$nums = [1, 3, 5, 6];
$target = 5;
var_dump(searchInsert($nums, $target));
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target)
{
    foreach ($nums as $index => $num) {
        if ($num >= $target) {
            return $index;
        }
    }
    return count($nums);
}
