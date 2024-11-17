<?php

class Solution
{

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2)
    {
        if ($num1 === "0" || $num2 === "0") {
            return "0";
        }

        $len1 = strlen($num1);
        $len2 = strlen($num2);
        $result = array_fill(0, $len1 + $len2, 0);

        // Reverse strings to make multiplication easier from least significant digit
        $num1 = strrev($num1);
        $num2 = strrev($num2);

        // Multiply each digit from num1 by each digit from num2
        for ($i = 0; $i < $len1; $i++) {
            for ($j = 0; $j < $len2; $j++) {
                // Multiply the digits and add to the current position
                $mul = ($num1[$i] - '0') * ($num2[$j] - '0');
                $sum = $mul + $result[$i + $j];

                // Update the result array with the sum and carry over
                $result[$i + $j] = $sum % 10;
                $result[$i + $j + 1] += intdiv($sum, 10);
            }
        }

        // Remove leading zeros and convert to a string
        while (end($result) === 0) {
            array_pop($result);
        }

        // Reverse back the result and convert to string
        $resultStr = implode('', array_reverse($result));
        echo $resultStr;


    }

}

$obj = new Solution();
$obj->multiply('123', '456');
