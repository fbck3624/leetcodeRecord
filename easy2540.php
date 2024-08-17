<?php
// https://leetcode.com/problems/minimum-common-value/description/
$nums1 = [1, 2, 3];
$nums2 = [2, 4];
var_dump(getCommon($nums1, $nums2));
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer
 */
function getCommon($nums1, $nums2)
{
    // This is sort but slow
    // $result = array_intersect($nums1,$nums2);

    // return empty($result)?-1:min($result);

    // This is long but quick
    // sort($nums1);
    $nums2 = array_flip($nums2);

    foreach ($nums1 as $num) {
        if (isset($nums2[$num])) {
            return $num;
        }
    }

    return -1;
}
