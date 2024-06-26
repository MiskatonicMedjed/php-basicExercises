<?php
$a = ['foo' => 1, 'bar' => 2];
# => 12
foreach ($a as $k) {
    echo $k;
}

$functionOutput = test($argc, $argv);

function test($argc, $argv){
for ($i=1; $i<$argc;$i++) {
    $ratings[$i] = $argv[$i];
}
return $ratings;
}

var_dump($functionOutput);