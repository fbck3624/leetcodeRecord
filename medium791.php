<?php
// https://leetcode.com/problems/custom-sort-string/description/

/**
 * @param String $order
 * @param String $s
 * @return String
 */
function customSortString($order, $s)
{
    $result = [];
    $array = array_count_values(str_split($s));
    $orderArray = str_split($order);
    foreach ($orderArray as $char) {
        if (isset($array[$char])) {
            for ($i = 0; $i < $array[$char]; $i++) {
                $result[] = $char;
            }
            unset($array[$char]);
        }
    }
    foreach ($array as $key => $value) {
        for ($i = 0; $i < $value; $i++) {
            $result[] = $key;
        }
    }

    return implode('', $result);
}
