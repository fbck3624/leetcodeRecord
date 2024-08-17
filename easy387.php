<?php
// https://leetcode.com/problems/first-unique-character-in-a-string/description/

/**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s)
{
    // 字串轉換成陣列後計算出現次數
    $counts = array_count_values(str_split($s));

    foreach ($counts as $key => $value) {
        if ($value == 1) {
            // 在字串中第一次出現的位置
            return strpos($s, $key);
        }
    }
    return -1;
}
