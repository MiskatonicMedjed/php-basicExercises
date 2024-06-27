<?php
$strings = "Marlon, Francis, Boardman, Bueno, Programador";
$array = explode(',', $strings);
$sortedArray = [];

function arraySorter(array $array){
sort($array);
return implode($array);
}

$sortedString = arraySorter($array);
var_dump($sortedString);