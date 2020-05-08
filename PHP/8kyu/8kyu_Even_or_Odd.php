<!-- Create a function (or write a script in Shell) that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers. -->

<?php 
function even_or_odd($n){
    if($n % 2 == 0 ) 
    {
      return "Even";
    }
    else
    {
      return "Odd";
    }
  }
