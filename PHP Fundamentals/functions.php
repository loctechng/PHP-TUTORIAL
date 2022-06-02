<?php
$greet = "How are you";
    function greeting($say = "How are you Boss"){
        return $say;
    }

//    $re =  greeting();
//    echo $re;

// TYPE DECLARATION

// declare(strict_types = 1);

// function numbers( int $num1, int $num2, int $num3){
//     return $num1 + $num2 + $num3;
// }
//  echo numbers( "8word", "8", "8");

//loops
// $a = 5;
// if( $a == 5) {
//     echo "true";
// }

// alternate
// if( $a == 5 )
//  echo "true";

// // 

// $a;

// function food(){
//     static $a;

//     $a += 2;
// }

// food();
// echo $a;

// isset

// function takes($a, $b){
//     if(isset($a)){
//         echo " a is set<br>";
//     }
//     if(isset($b)){
//         echo " b is set";
//     }
// }

// takes(null, 3);

// $arr = array("realy long string here", "thiseee", "middle", "larger");
// print_r($arr);

// usort($arr, function($a, $b){
//     return strlen($a) - strlen($b);
// });
// print_r($arr);


// printf('%.2f', 34.767676)

// print_r() , print() and echo

if (function_exists('greeting')){
    echo "True";
} else{
    echo false;
}

?>