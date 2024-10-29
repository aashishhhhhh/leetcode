<?php

// Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.

// Notice that the solution set must not contain duplicate triplets.



// Example 1:

// Input: nums = [-1,0,1,2,-1,-4]
// Output: [[-1,-1,2],[-1,0,1]]
// Explanation: 
// nums[0] + nums[1] + nums[2] = (-1) + 0 + 1 = 0.
// nums[1] + nums[2] + nums[4] = 0 + 1 + (-1) = 0.
// nums[0] + nums[3] + nums[4] = (-1) + 2 + (-1) = 0.
// The distinct triplets are [-1,0,1] and [-1,-1,2].
// Notice that the order of the output and the order of the triplets does not matter.
// Example 2:

// Input: nums = [0,1,1]
// Output: []
// Explanation: The only possible triplet does not sum up to 0.
// Example 3:

// Input: nums = [0,0,0]
// Output: [[0,0,0]]
// Explanation: The only possible triplet sums up to 0.



class solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum($nums)
    {
        $arr = array();
        $k = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($i < count($nums) && $i + 1 < count($nums) && $i + 2 < count($nums)) {
                $sum = $nums[$i] + $nums[$i + 1] + $nums[$i + 2];
                if ($sum == 0) {
                    array_push($arr, $nums[$i], $nums[$i + 1], $nums[$i + 2]);
                    $k++;
                }
            }
        }
        print_r($arr);
    }
}

$obj = new Solution();
$obj->threeSum([-1, 0, 1, 2, -1, -4]);