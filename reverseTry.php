<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $str = str_split($x);
        $length = sizeof($str);
        $arr = array();


        $k = 0;
        $temp = 0;
        $checkMinus = false;



        for ($i = $length - 1; $i >= 0; $i--) {
            if ($str[$length - 1] == 0 && $str[$i] == 0) {
                unset($str[$length]);
            } elseif ($str[$i] == '-') {
                $checkMinus = true;
            } else {
                $arr[$k] = $str[$i];
            }
            $k++;
        }

        if ($checkMinus) {
            array_unshift($arr, '-');
        }
        print_r($arr);

    }

    function generateRandomNumber()
    {
        $num = rand(100, 999); // Generate a random 3-digit number
        return $num;
    }
}

$obj = new Solution();
// $randomNumber = $obj->generateRandomNumber();
$obj->reverse('023');