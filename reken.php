<?php
// Simple Calculator
echo "Simple Calculator\n";

function num1() {
return (float)readline("Enter first number: ");
}

function operation(){
return readline("Enter operation (+, -, *, /): ");
}
function num2(){
return (float)readline("Enter second number: ");
}


function calculate() {
    $num1 = num1();
    $operation = operation();
    $num2 = num2();

    if ($operation == "+")  $result = $num1 + $num2;
    elseif ($operation == "-") $result = $num1 - $num2;
    elseif ($operation == "*") $result = $num1 * $num2;
    elseif ($operation == "/") $result = $num1 / $num2;
    else $result = "Invalid operator";
    return $result;

}
$again = "y";
 while ($again === "y"){

    $result = calculate();

    echo "Result: $result\n";
   $again = strtolower(readline("Calculate again? (y/n): ")); //added $again so that you can actually close the terminal
    

 }
 
if ($again === "n"){
        echo "goodbye!\n";
        exit();
    }

 ?>
