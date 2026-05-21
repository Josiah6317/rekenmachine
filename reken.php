<?php
// Simple Calculator
echo "Simple Calculator\n";

// Get user inputs
function num1() {
$num1 = (float)readline("Enter first number: ");
}

function operation(){
$operation = readline("Enter operation (+, -, *, /): ");
}
function num2(){
$num2 = (float)readline("Enter second number: ");
}


function calculate() {
    $num1 = num1();
    $operation = operation();
    $num2 = num2();

    if ($operation == "+") $result = $num1 + $num2;
    elseif ($operation == "-") $result = $num1 - $num2;
    elseif ($operation == "*") $result = $num1 * $num2;
    elseif ($operation == "/") $result = $num1 / $num2;
    else $result = "Invalid operator";

    echo "Result: " . $result;
}
 ?>
