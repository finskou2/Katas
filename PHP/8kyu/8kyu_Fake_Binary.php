<?php 
// Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

function fake_bin($s){
  return str_replace([5,6,7,8,9], 1, str_replace([1,2,3,4], 0, $s));
}