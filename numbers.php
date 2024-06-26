<?php
$input = [];

for ($i=1; $i<$argc;$i++) {
    $input[$i] = $argv[$i];
}

$solos = array_unique($input);

var_dump($solos);