<?php

function boolToWord($bool){

if ($bool === true )
  {
    return "Yes";
  } 
  else if ($bool === false)
  {
    return "No";
  }

return $bool;
}


// or  function boolToWord($bool){
//  return $bool ? "Yes" : "No" ;
// }