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

function divide($dividend, $divisor) {

     if ($divisor == 0) {

        echo "Error: Impossible division by zero. <br>";      

      } else {

         echo "The division in $dividend e $divisor é" . ($dividend / $divisor) . "<br>";
      }   
}

divide(34, 17);

$array = [1, 2, 3, 4, 5];

$isValidArray = true;

foreach ($array as $valor) {

  if (!is_numeric($value)) {
     $isValidArray = false;
     break;
  }
}

if ($isValidArray){
  
  echo "All value of array are numbers.<br>";

  for ($i = 1; $i <= count($array); $i++) {
    
    echo "The value in $i position is:" . $array[i] . "<br>";
  
}

  $sum = array_sum($array);
  echo "The sum of all numbers of array is: " . $array[i] . "<br>";
} else {
  echo "The array contain non numeric values.";
}

function arrayPosition() {

    echo "The initial position of array: " . $array[0];
    echo "The final position of array is: " . $array[cout($array) - 1] . "<br>";

}

arrayPosition();
?>

</body>
</html>