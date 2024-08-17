<?php
// https://leetcode.com/problems/deepest-leaves-sum/description/
$root = [1, 2, 3, 4, 5, null, 6, 7, null, null, null, null, 8];
var_dump(deepestLeavesSum($root));
function deepestLeavesSum($root)
{
    if ($root === null) return [];
    $queue = [$root];
    $temp = [];

    while (!empty($queue)) {
        $size = count($queue);

        $temp = [];

        for ($i = 0; $i < $size; $i++) {
            $node = array_shift($queue);

            $temp[] = $node->val;

            if ($node->left !== null) $queue[] = $node->left;
            if ($node->right !== null) $queue[] = $node->right;
        }
    }

    return array_sum($temp);
}
