<?php
  
// Input section
// get users name
$name = (string)readline("Your name: ");

$int = (int)readline('Enter an integer: ');
 
$float = (float)readline('Enter a floating'
            . ' point number: ');
 
// Entered integer is 10 and
// entered float is 9.78
echo "Hello ".$name." The integer value you entered is " 
. $int
    . " and the float value is " . $float;
?>