<?php
$nums=$_GET["inputs"];
$nums_array=explode(',',$nums);

 $array_length = count($nums_array);
 for($i = 0; $i < $array_length; $i++) {
     $min = $i;
     for($j = $i + 1; $j < $array_length; $j++) {
         if($nums_array[$j] < $nums_array[$min]) {
             $min = $j;
         }
     }
     $temp = $nums_array[$min];
     $nums_array[$min] = $nums_array[$i];
     $nums_array[$i] = $temp;
    }
$json_array = json_encode($nums_array);
echo $json_array;
?>