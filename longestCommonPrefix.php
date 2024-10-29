<?php

// Write a function to find the longest common prefix string amongst an array of strings.

// If there is no common prefix, return an empty string "".



// Example 1:

// Input: strs = ["flower","flow","flight"]
// Output: "fl"
// Example 2:

// Input: strs = ["dog","racecar","car"]
// Output: ""
// Explanation: There is no common prefix among the input strings.


class Solution
{
    public function longestCommonPrefix($strs)
    {
        if (empty($strs)) {
            return "";
        }

        // Start with the first word as the potential prefix
        $prefix = $strs[0];

        // Compare prefix with each string
        foreach ($strs as $string) {
            // Reduce prefix until it matches the beginning of the current string
            while (strpos($string, $prefix) !== 0) {
                $prefix = substr($prefix, 0, -1);
                if ($prefix === "") {
                    return "";
                }
            }
        }

        echo $prefix;
    }

    public function randomStrs()
    {
        $num = rand(0, 1); // Generate a random 3-digit number
        if ($num) {
            return ["flower", "flow", "flight"];
        } else {
            return ["dog", "racecar", "car"];
        }
    }
}

$obj = new Solution();
$strs = $obj->randomStrs();
$obj->longestCommonPrefix($strs);