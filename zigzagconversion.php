<?php
class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */


    function convert($s, $numRows)
    {
        if ($numRows == 1)
            return $s;

        $rows = array_fill(0, min($numRows, strlen($s)), "");

        $currentRow = 0;
        $goingDown = false;

        foreach (str_split($s) as $key => $value) {
            $rows[$currentRow] .= $value;
            // Change direction at the top or bottom row
            if ($currentRow == 0 || $currentRow == $numRows - 1) {
                $goingDown = !$goingDown;
            }

            // Move up or down
            $currentRow += $goingDown ? 1 : -1;

        }
        echo implode(" ", $rows);


    }

    function generateRandomNumber()
    {
        $num = rand(1, 4); // Generate a random 3-digit number
        return $num;
    }
}

$obj = new Solution();
$obj->convert("PAYPALISHIRING", $obj->generateRandomNumber());