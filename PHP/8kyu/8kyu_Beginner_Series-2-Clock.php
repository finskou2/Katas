<!-- Clock shows 'h' hours, 'm' minutes and 's' seconds after midnight.

Your task is to make 'Past' function which returns time converted to milliseconds.

Example: past(0, 1, 1) == 61000 -->

<?php

function past(int $h, int $m, int $s): int {
  return $h * 3600000 + $m * 60000 + $s * 1000;
}

//or 
// function past($h, $m, $s) {
//   return 60 * 60 * 1000 * $h + 60 * 1000 * $m + 1000 * $s;
// }