<?php

class Solution
{
    public $nums1 = [1, 3], $nums2 = [2];

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        print_r($nums1);
    }
}

$obj = new Solution();
$obj->findMedianSortedArrays([1, 3], [2]);