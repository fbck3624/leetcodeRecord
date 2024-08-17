<?php
// https://leetcode.com/problems/median-of-two-sorted-arrays/
$nums1 = [1, 2];
$nums2 = [3, 4];
var_dump(findMedianSortedArrays($nums1, $nums2));

function findMedianSortedArrays($nums1, $nums2)
{
    $merge = array_merge($nums1, $nums2);
    sort($merge);
    $length = count($merge);
    $sum = 0;

    if ($length % 2 === 0) {
        $index = $length / 2 - 1;
        $sum = ($merge[$index] + $merge[$index + 1]) / 2;
    } else {
        $index = ($length + 1) / 2;
        $sum = $merge[$index - 1];
    }
    return $sum;
}
