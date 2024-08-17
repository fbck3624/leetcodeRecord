<?php
// https://leetcode.cn/problems/integer-to-roman/description/
var_dump(intToRoman('1000'));

function intToRoman($num)
{
    $str = '';
    $map = [
        1000 => "M",
        900 => "CM",
        800 => "DCCC",
        700 => "DCC",
        600 => "DC",
        500 => "D",
        400 => "CD",
        300 => "CCC",
        200 => "CC",
        100 => "C",
        90 => "XC",
        80 => "LXXX",
        70 => "LXX",
        60 => "LX",
        50 => "L",
        40 => "XL",
        30 => "XXX",
        20 => "XX",
        10 => "X",
        9 => "IX",
        8 => "VIII",
        7 => "VII",
        6 => "VI",
        5 => "V",
        4 => "IV",
        3 => "III",
        2 => "II",
        1 => "I",
    ];
    $thousand = (int)($num / 1000);
    $hundred = (int)(($num % 1000) / 100);
    $ten = (int)(($num % 100) / 10);
    $unit = (int)($num % 10);

    for ($i = 0; $i < $thousand; $i++) {
        $str .= 'M';
    }

    if ($hundred > 0) {
        $str .= $map[$hundred * 100];
    }
    if ($ten > 0) {
        $str .= $map[$ten * 10];
    }
    if ($unit > 0) {
        $str .= $map[$unit];
    }

    return $str;
}
