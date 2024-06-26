<?php

echo "\nWhat is your weight: \n";
$weight = fgets(STDIN);
echo "\nWhat is your height: \n";
$height = fgets(STDIN);

$bmi = calculateBMI($height,$weight);

echo "\nYour BMI is $bmi.";

function calculateBMI(float $height,float $weight){
return $weight / $height * 2;
}