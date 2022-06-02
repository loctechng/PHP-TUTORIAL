<?php
//Three types of arrays in PHP
// 1. indexed array
// 2. associative arrays
// 3. multidimensional array

// indexed array
$array = array( 'one', 'two', 'three');
//or
//$array = [];
// echo $array[1];

// associative array
$associative_array = array(
    1 => 1,
    'Favour' => 'Genius'
);

// echo $associative_array['Favour'];

// multidimensional array


$multi_array = array(
    array(1,2,3,4,5,6),
    array(13,4,5,6),
    array(24,5,6)
);

// echo $multi_array[1][2];

//  var_dump ($multi_array);
// Adding 7 to indexed array from top
 $array[] = 7;
//  echo $array[3];
// print_r ($array);

// Adding to associative array
$associative_array['Theo'] = "Smart";
$associative_array['Rey'] = 20;
// print_r ($associative_array);

// Deleting from array
// array_splice() is a function
// two argument
// Splicing the index
// print_r (array_splice($array, 2));

echo count($array);

?>