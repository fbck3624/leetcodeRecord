<?php
// https: //leetcode.com/problems/execution-of-all-suffix-instructions-staying-in-a-grid/description/
$n = 3;
$startPos = [0, 1];
$s = "RRDDLU";
var_dump(executeInstructions($n, $startPos, $s));
function executeInstructions($n, $startPos, $s)
{
    $s = str_split($s);
    $total = [];
    while (!empty($s)) {
        $x = $startPos[1];
        $y = $startPos[0];
        $count = 0;
        foreach ($s as $value) {
            if ($value === 'R') {
                if ($x + 1 <= $n - 1) {
                    $x += 1;
                    $count += 1;
                } else {
                    break;
                }
            } elseif ($value === 'L') {
                if ($x - 1 >= 0) {
                    $x -= 1;
                    $count += 1;
                } else {
                    break;
                }
            } elseif ($value === 'D') {
                if ($y + 1 <= $n - 1) {
                    $y += 1;
                    $count += 1;
                } else {
                    break;
                }
            } else {
                if ($y - 1 >= 0) {
                    $y -= 1;
                    $count += 1;
                } else {
                    break;
                }
            }
        }
        array_shift($s);
        $total[] = $count;
    }

    return $total;
}
