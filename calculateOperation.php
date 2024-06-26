Write a PHP function that receives two integers and a string representing a mathematical operation, and returns the result of the operation.

<?php

$numberA = $argv[1];
$numberB = $argv[3];
$operand = $argv[2];
$result = calculator($numberA,$numberB,$operand);
echo "\n\n$numberA $operand $numberB is equal to $result.";

function calculator (float $numberA,float $numberB, string $operand) {
    switch ($operand) {
        case "+":
            return $numberA + $numberB;
        case "-":
            return $numberA - $numberB;
        case "*":
            return $numberA * $numberB;
        case "/":
            return $numberA / $numberB;
        case "**":
            return $numberA ** $numberB;
        case "%":
            return $numberA % $numberB;
        default:
            echo "Invalid operand";
        }
}