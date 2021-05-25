<?php

function largest_pair($arr, $n)
{
    $min = PHP_INT_MAX;
    $secondMin = PHP_INT_MAX;
    for ($j = 0; $j < $n; $j++)
    {
        if ($arr[$j] > $max)
        {
            $secondMax = $max;
            
            $max = $arr[$j];
        } else if (($arr[$j] > $secondMax) && $arr[$j] != $max) {
 
            //secondMin update
            $secondMax = $arr[$j];
        }
    }
    // Return the sum of the minimum pair
    return ($secondMax + $max);
}
 
// Driver code
$arr = array(8, 4, 6, 3, 7, 15, 2, 3, 10);
$n = sizeof($arr);
echo largest_pair($arr, $n);
 
?>