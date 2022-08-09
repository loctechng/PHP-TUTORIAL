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

//echo count($array);

//$a = array("Volvo", "BMW", "Toyota"); // array to string  
//var_dump($a);
//echo ' < = to = > ';  
//$a = (string)$a;  
//var_dump($a);  
//echo '<br>' ; 


//Casting Array

//$b = array("Volvo", "BMW", "Toyota"); // array to object  
//var_dump($b);  
//echo '<br> < = to = > <br> ';  
//$b = (object)$b;  
//var_dump($b);  
//echo '<br>' ;


//Geting the Size of an array
//$cars=array("Volvo","BMW","Toyota");
//echo count($cars);

//or

//$cars=array("Volvo","BMW","Toyota");
//echo sizeof($cars);


//Looping through an array

//$colors = array("red", "green", "blue", "yellow");
//
//foreach ($colors as $value) {
//  echo "$value <br>";
//}


//Looping through an asociative array

//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//
//foreach($age as $x => $val) {
//  echo "$x = $val<br>";
//}


//Examining Arrays

//Using print_r
//$x = array ('x' => 'Dept', 'y' => 'Employee', 'z' => array ('a', 'b', 'c'));
//   print_r ($x);


//Using var_dump
//$x = array(1, 2,3, array("x", "y", "z","a"));
//   var_dump($x);


//Joining Arrays
//$arr = array('Hello','World!','Beautiful','Day!');
//echo join(" ",$arr)."<br>";
//echo join("+",$arr)."<br>";
//echo join("-",$arr)."<br>";
//echo join("X",$arr);

//Sorting Arrays
//$cars = array("Volvo", "BMW", "Toyota");

//echo '<br> Before sorting : <br>';
//print_r($cars);
//
//sort($cars);
//
//echo '<br> After sorting : <br>';
//print_r($cars);

?>