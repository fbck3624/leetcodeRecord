<?php
// https://leetcode.com/problems/middle-of-the-linked-list/description/
$head = [1, 2, 3, 4, 5];
var_dump($head);
/**
 * @param ListNode $head
 * @return ListNode
 */
function middleNode($head)
{
    $slow = $head;
    $fast = $head;

    while ($fast !== null && $fast->next !== null) {
        $slow = $slow->next;
        $fast = $fast->next->next;
    }

    return $slow;
}
