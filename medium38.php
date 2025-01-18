<?php
// https://leetcode.com/problems/count-and-say/description/

function countAndSay($n)
{
    $result = "1";

    for ($i = 2; $i <= $n; $i++) {
        $current = "";
        $count = 1;

        for ($j = 1; $j < strlen($result); $j++) {
            if ($result[$j] == $result[$j - 1]) {
                $count++;
            } else {
                $current .= $count . $result[$j - 1];
                $count = 1;
            }
        }
        $current .= $count . $result[$j - 1];
        $result = $current;
    }

    return $result;
}
