<?php
function solution()
{
    $s = 'abcabcbb';
    $maxLength = 0;
    $charMap = [];
    $start = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        if (isset($charMap[$char]) && $charMap[$char] >= $start) {
            $start = $charMap[$char] + 1;
        }

        $charMap[$char] = $i;
        $maxLength = max($maxLength, $i - $start + 1);
    }

    echo $maxLength;
}

solution();