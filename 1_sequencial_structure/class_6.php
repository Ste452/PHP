<!DOCTYPE HTML>

<html>
<head>
</head>
<body>

<?php 

$name = "Steve";
$age = "17";
$city = "Osaka";

echo $name . " " . $age . " " . $city . "<br>";

$number = 3;

if ($number % 2 == 0) {

 echo "The number $number is even<br>";

} else {

 echo "The number $number is odd<br>";
}


function sum($sum1, $sum2) {

echo "The sum of $sum1 and $sum2 is " .  ($sum1 + $sum2)  . "<br>";

}

sum(5, 10);

function multiply($product1, $product2) {

     echo "The multiplicity of $product1 and $product2 is" . $product1 * $product2 . "<br>"; 
}

multiply(2, 8);

function subtract($minuend, $subtrahend) {

   echo "A subtração de $minuend e $subtrahend é" . ($minuend - $subtrahend) . "<br>";
}

subtract(22, 5);

function divide($dividend, $divison) {

     if ($divison == 0) {
        echo "Error: Impossible division by zero. " . "<br>";      
      } else {
         echo "The division in $dividend e $divison: " . ($dividend / $divison) . "<br>";
      }   
}

divide(34, 17);

$array = [1, 2, 3, 4, 5];

$array2 = ["name" => "Steve", "age" => 17];

foreach ($array2 as $key => $value) {
  echo "Associative Array - Key: $key, Value: $value<br>";
}

$isValidArray = true;

foreach ($array as $value) {

  if (!is_numeric($value)) {
     $isValidArray = false;
     break;
  }
}

if ($isValidArray){
  
  echo "All value of array are numbers.<br>";

  for ($i = 0; $i <= count($array); $i++) {
    
    echo "The value in $i position is:" . ($i + 1) . "is: " . $array[$i] . "<br>";
  
}
  $sum = array_sum($array);
  echo "The sum of all numbers in the array is: $sum<br>";
} else {
  echo "The array contain non numeric values.";
}

function arrayPosition($array) {

    echo "The initial position of array: " . $array[0] . "<br>";
    echo "The final position of array is: " . $array[count($array) - 1] . "<br>";

}

function arrayMax($array) {
  echo "The max value of the array: " . max($array) . "<br>";
}

arrayPosition($array);
arrayMax($array);
?>

</body>
</html>