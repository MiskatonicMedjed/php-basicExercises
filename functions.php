<?php

function printFirstLine($file){
$resource = fopen(__DIR__ . "/$file", "r");
$firstLine = fgets($resource);
fclose($resource);
var_dump($firstLine);
}

function writeLastLine($file, $string){
    //$resource = fopen(__DIR__ . "/$file", "w");
    //fputs($resource, $string, 20);
    //fclose($resource);
    file_put_contents(__DIR__ . "/$file", "$string", FILE_APPEND);
    echo file_get_contents(__DIR__ . "/$file");
    }


function jsonMaker($data){
    $array = json_decode($data, true);
    $jsonCode = json_encode($array);
    file_put_contents(__DIR__ . '/test.json', $jsonCode);
}

function createObject ($data){
    var_dump(json_decode($data, true));
}