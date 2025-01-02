<!DOCTYPE HTML>

<html>
<head>
</head>
<body>

<?php 

$name = "Steve";
$idade = "17";
$cidade = "Osaka";

echo $name . " " . $idade . " " . $cidade . "<br>";

$number = 3;

if ($number % 2 == 0) {

 echo "O número $number é par<br>";

} else {

 echo "O número $number é ímpar<br>";
}


function sum($sum1, $sum2) {

echo "A soma de $sum1 e $sum2 é" . ($sum1 + $sum2) . "<br>";

}

sum(5, 10);

function multiply($product1, $product2) {

     echo "A multiplicação de $product1 e $product2 é" . $product1 * $product2 . "<br>"; 
}

multiply(2, 8);

function subtract($minuendo, $subtraendo) {

   echo "A subtração de $minuendo e $subtraendo é" . ($minuendo - $subtraendo) . "<br>";
}

subtract(22, 5);

function divide($dividendo, $divisor) {

echo "A divisão de $dividendo e $divisor é" . ($dividendo / $divisor) . "<br>";

}

divide(34, 17);

?>

</body>
</html>