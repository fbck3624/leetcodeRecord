<?php
// https://leetcode.com/problems/minimum-number-of-operations-to-move-all-balls-to-each-box/
$boxes = "001011";
var_dump(minOperations($boxes));
function minOperations($boxes)
{
    $boxes = str_split($boxes, 1);
    $sum = [];
    $len = count($boxes);
    $idx = 0;
    while ($idx < $len) {
        $tmp = 0;
        foreach ($boxes as $index => $box) {
            if ($index != $idx && $box != 0) {
                $tmp += abs($index - $idx);
            }
        }
        $sum[] = $tmp;
        $idx++;
    }

    return $sum;
}
