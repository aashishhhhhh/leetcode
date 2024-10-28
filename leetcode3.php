<?php

class Solution
{

    /**
     */
    function isPalindrome($x)
    {
        $arr = array();
        $xStr = (string) $x;
        for ($i = 0; $i < strlen($xStr); $i++) {
            // Add each digit to the array
            $arr[] = $xStr[$i];
        }

        $lengthOfArray = count($arr);
        $reverseArray = array();

        for ($i = $lengthOfArray - 1; $i >= 0; $i--) {
            $reverseArray[$i] = $arr[$i];
        }

        $revNumber = implode($reverseArray);
        if ($x == $revNumber) {
            echo 'The number is Palindrome';
        } else {
            echo 'The number is not palindrome';
        }



    }

    function generateRandomNumber()
    {
        $num = rand(100, 999); // Generate a random 3-digit number
        return $num;
    }
}
$obj = new Solution();
$randNumber = $obj->generateRandomNumber();
$obj->isPalindrome($randNumber);