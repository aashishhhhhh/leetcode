<?php

class solution
{
    public function binarySearch($nums, $target)
    {
        $n = count($nums);

        if ($n % 2 == 1) {
            // Odd number of elements, return the middle element
            $middlevalue = $nums[intval($n / 2)];
        } else {
            // Even number of elements, return the average of the two middle elements
            $mid1 = $nums[$n / 2 - 1];
            $middlevalue = $nums[$n / 2 - 1];
            ;
        }


        if ($middlevalue == $target) {
            echo 'The target is found';

        } elseif ($target < $middlevalue) {
            for ($i = 0; $i < $n / 2; $i++) {
                if ($middlevalue == $nums[$i]) {
                    echo 'The target is found';
                    break;
                } else {
                    unset($nums[$i]);
                    $this->binarySearch($nums, 1);
                }

            }
        } elseif ($target > $middlevalue) {
            // for ($i = $n - 1; $i >= $n / 2; $i--) {
            //     echo $nums[$i];
            //     if ($middlevalue == $nums[$i]) {
            //         echo 'The target is found';
            //         break;

            //     } else {
            //         unset($nums[$i]);
            //     }
            // }
        }






    }
}

$obj = new solution();
$obj->binarySearch([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 1);