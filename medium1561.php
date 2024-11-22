<?php
// https://leetcode.com/problems/maximum-number-of-coins-you-can-get/
var_dump(maxCoins([9, 8, 7, 6, 5, 1, 2, 3, 4]));

/**
 * @param Integer[] $piles
 * @return Integer
 * 此題解法，先排序，如果要取得最大解，算法應該是前面兩個數+目前最小數的組合
 * [9, 8, 7, 6, 5, 1, 2, 3, 4]
 * [9,8,1],[7,6,2],[5,4,3]
 */
function maxCoins($piles)
{
    rsort($piles);
    $length = count($piles);
    // 減掉最後面最小的
    $length = $length - ($length / 3);
    $count = 0;
    for ($i = 1; $i < $length; $i += 2) {
        if ($i <= $length) {
            $count += $piles[$i];
        }
    }

    return $count;
}
