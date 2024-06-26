<?php

echo "\nType the temperature: ";
$temp = fgets(STDIN);
echo "\nChoose an option to convert to:\n";
echo "1. Celcius\n";
echo "2. Fahrenheit\n";
$choice = fgets(STDIN);
$result = tempConverter($temp, $choice);
$unitName = $choice == 1 ? "Celcius":"Fahrenheit";
echo "The temperature is $result $unitName.";
function tempConverter(float $temp, int $choice){
    switch($choice){
        case 1:
            return ($temp - 32) / 1.8;
        case 2:
            return ($temp * 1.8) + 32;
        default:
            echo "Invalid input. Exiting...";
            break;
        }
}
