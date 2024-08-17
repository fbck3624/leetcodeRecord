<?php
// https://leetcode.com/problems/integer-to-roman/
var_dump(threeSum([-1, 0, 1, 2, -1, -4]));
function threeSum($nums)
{
    $sum = 0;
    $zero = [];
    $minus = [];
    $plus = [];
    $newArray = [];
    sort($nums);
    foreach ($nums as $num) {
        $sum += $num;
        if ($num === 0) {
            $zero[] = $num;
        } elseif ($num < 0) {
            $minus[] = $num;
        } else {
            if (isset($plus[$num])) {
                $plus[$num] += 1;
            } else {
                $plus[$num] = 1;
            }
        }
    }
    echo $sum;
    if ($sum === 0) {
        // 只有0
        if (count($plus) === 0 && count($minus) === 0 && count($zero) > 0) {
            return [[0, 0, 0]];
        }
        foreach ($minus as $key => $m) {
            if (isset($plus[abs($m)]) && count($zero) > 0) {
                $newArray[] = [$m, abs($m), 0];
            }
        }
    } else {
        return [];
    }

    return $newArray;
}
