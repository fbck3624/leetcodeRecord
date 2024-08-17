<?php
// https://leetcode.com/problems/count-elements-with-maximum-frequency/description/
$nums = [1, 2, 2, 3, 1, 4];
var_dump($nums);
/**
 * @param Integer[] $nums
 * @return Integer
 */
function maxFrequencyElements($nums)
{
    // $result = [];
    // foreach($nums as $num){
    //     if(isset($result[$num])){
    //         $result[$num] += 1;
    //     }else{
    //         $result[$num] = 1;
    //     }
    // }
    // $max = max($result);
    // $count = 0;
    // foreach($result as $index => $value){
    //     if($value === $max){
    //         $count += $value;
    //     }
    // }

    // return $count;
    $freq_map = array_count_values($nums);
    $max_freq = max($freq_map);
    $max_freq_element = array_count_values($freq_map)[$max_freq];
    $result =  $max_freq_element * $max_freq;
    return $result;
}
