<?php
#The Space ship comparison operator
    echo 7 <=> 7; #true

#The Logical Operator
#AND the symbol is &&
#OR the symbol is ||

$a = 7;

if( $a < 0 ){
    echo '$a is smaller then 0';
} elseif( $a < 10 ){
    echo '<br>Second elseif block<br>';
}
#Ternary Operator
#Condition ? Task A: TaskB

 $b = 7 == 7  ? 'Yes' : 'No';

 echo $b;

// switch (variable used for switching) {
//     case firstCase:
//         Task to run;
//         break;
//     case secondCase:
//         Task to run:
//         break;
// }

$b = 20;

switch ($b) {
    case 10:
        echo '$b is 10';
        break;
    case 21:
        echo '<br>$b is 20<br>';
        break;
    case 25:
        echo '$b is 25';
        break;
    default:
    echo '<br>Every other thing is false<br>';
}

#For Loops
for ($c = 1; $c <5; ++$c) {
    echo 'The value of $c is '.$c.'<br>';
}
//foreach is used to iterate in array
$array = array(11,2,3,4,5,6);

// for index array
foreach ( $array as $number ) {
    echo '<br>The number is '.$number. '<br>';
}
//associative array
$assoc_array = array(
    'Favour' => 28,
    'Rey' => 27,
    'Theo' => 19,
    'JohnPaul' => 'Sweet Sixteen'
);
foreach ($assoc_array as $name => $age ){
    echo "<br>$name is $age years old!";
}

?>