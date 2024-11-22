<?php
// https://leetcode.com/problems/queries-on-a-permutation-with-key/

$queries = [7, 5, 5, 8, 3];
$m = 8;

var_dump(processQueries($queries, $m));
function processQueries($queries, $m)
{
    $arr = range(1, $m);
    $record = [];
    foreach ($queries as $q) {
        $key = array_search($q, $arr);
        $value = $arr[$key];
        unset($arr[$key]);
        $record[] = $key;
        $arr = array_merge([$key => $value], $arr);
    }

    return $record;
}
