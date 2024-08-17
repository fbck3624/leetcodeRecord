<?php
// https://leetcode.com/problems/group-the-people-given-the-group-size-they-belong-to/description/
/**
 * @param Integer[] $groupSizes
 * @return Integer[][]
 */
function groupThePeople($groupSizes)
{
    $array = array_count_values($groupSizes);
    $result = [];
    foreach ($array as $key => $value) {
        for ($i = 0; $i < $value / $key; $i++) {
            $mergeResult = [];
            while (count($mergeResult) < $key) {
                $index = array_search($key, $groupSizes);
                if ($index === false) {
                    break;
                }
                $mergeResult[] = $index;
                unset($groupSizes[$index]);
            }
            if ($mergeResult !== []) {
                $result[] = $mergeResult;
            }
        }
    }

    return $result;
}
