<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        if (substr(strval($x), 0, 1) != "-") {
            $arr = str_split($x);
            $k = 0;
            $newArr = array();
            for ($i = count($arr) - 1; $i >= 0; $i--) {
                if ($arr[$i] != 0) {
                    $newArr[$k] = $arr[$i];
                    $k++;
                }

            }

            $value = implode($newArr);

        } else {
            $arr = str_split($x);
            $k = 0;
            $newArr = array();
            for ($i = count($arr) - 1; $i >= 0; $i--) {
                if ($i != 0) {
                    $newArr[$k] = $arr[$i];
                }
                $k++;
            }

            $value = 0 - implode($newArr);
            echo $value;
        }

        echo $value;
    }

    function generateRandomNumber()
    {
        $num = rand(100, 999); // Generate a random 3-digit number
        return $num;
    }
}

$obj = new Solution();
$randomNumber = $obj->generateRandomNumber();
$obj->reverse($randomNumber);