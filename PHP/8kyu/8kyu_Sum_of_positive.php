<!-- You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20

Note: if there is nothing to sum, the sum is default to 0. -->

<?php

function positive_sum($arr) {
  $sum = 0;
  $s = sizeof($arr);
  for ($i = 0; $i < $s; $i++)
  {
    if ($arr[$i] > 0) 
    {
      $sum += $arr[$i];
    }
  }
  return $sum;
}