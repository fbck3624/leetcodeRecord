<?php
// https://leetcode.com/problems/intersection-of-two-arrays/description/
$nums1 = [1, 2, 2, 1];
$nums2 = [2, 2];
/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersection($nums1, $nums2)
{
    $nums2 = array_flip($nums2);
    $result = [];

    foreach ($nums1 as $num) {
        if (isset($nums2[$num])) {
            $result[] = $num;
        }
    }

    return array_unique($result);
}
