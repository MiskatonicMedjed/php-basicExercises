<?php
$notas = [];

for ($i=1; $i<$argc;$i++) {
    $notas[$i] = $argv[$i];
}

foreach ($notas as $nota){
$resultado = $nota > 6 ? "aprovado(a)" : "reprovado(a)";
echo "Esse(a) aluno(a) foi $resultado.\n";
}