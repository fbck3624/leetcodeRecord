<?php
// https://leetcode.com/problems/linked-list-cycle/description/
$head = [3, 2, 0, -4];
var_dump($head);
/**
 * @param ListNode $head
 * @return Boolean
 */
function hasCycle($head)
{
    if ($head == null) {
        return false;
    }

    $slow = $head;
    $fast = $head;
    while ($fast != null && $fast->next != null) {
        $slow = $slow->next;
        $fast = $fast->next->next;
        if ($fast === $slow) {
            return true;
        }
    }
    return false;
}
