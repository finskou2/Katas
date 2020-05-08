<?php 

// Write a function called repeatString which repeats the given String src exactly count times.

function repeatStr($n, $str)
{
  $res = str_repeat($str, $n);
  return $res;
}