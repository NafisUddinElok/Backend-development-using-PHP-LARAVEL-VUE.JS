<?php 

// $number = 10;
// printf("the number is : %d", $number); // the number is : 10
// $sprintf = sprintf("the number is : %d from sprintf", $number); // the number is : 10 from sprintf
// echo "\n";
// echo $sprintf;

// $floatNumber = 2;
// printf("this is number %.2f", $floatNumber); // this is number 2.00
// echo "\n";


 /* 
 * conditional statements 
 * ternary operators 
 */
//  $age = 50;
//  if($age == 51){
//     echo "you are 51 years old";
//  }else{
//     echo 'my age is not about 50';
//  }

// $age = 52 ? 'age is 52' : 'age is not 52'; // age is not 52
// echo $age;

// $age = 51;

// switch($age){
//     case 50: 
//         echo "you are 50 years old";
//         break;
//     case 51:
//         echo "you are 51 years old";
//         break;
//     case 52:
//         echo "you are 52 years old";
//         break;
//     default: 
//         echo "yours age is unknown to us";
//         break;
// }


// $result = match($age){
//     50 => 'age is 50',
//     51 => 'age is 51',
//     52 => 'age is 52',
//     default => 'age is unknown',
// };
// echo $result;


//number classifier - start

echo "enter a number: ";
$number = (int) readline();
if($number > 0){
    echo "the number is positive\n";
} else if($number < 0){
    echo "the number isnegative\n";
} else {
    echo "the number is zero\n";
}