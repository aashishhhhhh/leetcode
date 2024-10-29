<?php
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $arr = array_merge($nums1, $nums2);

        // Sorting the array
        for ($i = 0; $i < count(value: $arr); $i++) {

            if ($i < count($arr) && $i + 1 < count($arr)) {

                for ($j = $i + 1; $j < count($arr); $j++) {
                    if ($arr[$i] > $arr[$j]) {
                        $temp = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $temp;
                    }
                }

            }
        }


        $medianLength = count($arr);
        if ($medianLength % 2 == 0) {
            $medianPosition = $medianLength / 2;

            $value1 = $medianPosition;
            $value2 = $medianPosition + 1;

            $median = ($value1 + $value2) / 2;

            echo 'The median is ' . number_format((float) $median, 2);



        } else {
            $median = ($medianLength + 1) / 2;
            echo 'The median is ' . number_format((float) $arr[$median - 1], 2);
        }


    }
}

$obj = new Solution();
$obj->findMedianSortedArrays([1, 9, 6, 4], [7, 5, 3, 5]);