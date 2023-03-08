<?php
$nums=$_GET("inputs")
$nums_array=[]
$nums_array=explode(',',$nums)

 $array_length = count($nums_array);
 // Iterate over the entire array, except the last element (0...n-1).
 for($i = 0; $i < $array_length; $i++) {
     $min = $i;
     // Iterate the remaining array (i...n).
     for($j = $i + 1; $j < $array_length; $j++) {
         // If j is less than the min, update the min index.
         if($nums_array[$j] < $nums_array[$min]) {
             $min = $j;
         }
     }
     // Do an in place swap.
     $tmp = $arr[$min];
     $arr[$min] = $arr[$i];
     $arr[$i] = $tmp;
    }