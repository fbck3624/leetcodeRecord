<?php
// https: //leetcode.com/problems/string-to-integer-atoi/
var_dump(myAtoi("      -11919730356x"));
/**
 * @param String $s
 * @return Integer
 */
function myAtoi($s)
{
    // 1.移除空白
    $s = trim($s);
    $min = -pow(2, 31);
    $max = pow(2, 31) - 1;
    $s = str_split($s);
    $first = false;
    $second = false;
    foreach ($s as $key => $word) {
        if (!$first) {
            // 2.+/- 移除+
            if ($word === '+') {
                unset($s[$key]);
                $first = true;
                continue;
            } elseif ($word === '-') {
                $first = true;
                continue;
            }

            // 3.第一個數字處理
            if (is_numeric($word)) {
                if (!is_numeric($s[$key + 1])) {
                    return $word;
                }
                $first = true;
            } else {
                // 4.首字非數字返回0
                $first = true;
                return 0;
            }
        } else {
            if (is_numeric($word) || $word === ' ') {
                $second = true;
            }
            // 5.不是第一位數，但是是數字前的 +/-
            if (($word === '+' || $word === '-') && !$second) {
                return 0;
            }
            // 6.中間遇到非數字
            if (!is_numeric($word) && $second) {
                $s = substr(implode('', $s), 0, $key);
                break;
            }
        }
    }
    $s = is_array($s) ? intval(implode('', $s)) : intval($s);
    if ($s < $min) {
        return $min;
    }
    if ($s > $max) {
        return $max;
    }

    return $s;
}
