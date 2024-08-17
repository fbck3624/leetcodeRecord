<?php
//https://leetcode.com/problems/find-first-palindromic-string-in-the-array/description/

/**
 * @param String[] $words
 * @return String
 */
function firstPalindrome($words)
{
    foreach ($words as $word) {
        // 完全顛倒
        if ($word === strrev($word)) {
            return $word;
        }
    }
    return '';
}
