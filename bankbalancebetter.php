<?php

$titular = "Sr.Teste";
$saldo = 10_000;
$input = 0;

echo "************************\n";
echo "Bem vindo $titular.\n";
echo "Seu saldo atual é R$ $saldo.\n";
echo "************************\n";

do {
echo "\nDigite uma opção abaixo:\n";
echo "1. Consultar saldo.\n";
echo "2. Sacar.\n";
echo "3. Depositar.\n";
echo "4. Sair.\n";

$input = fgets(STDIN);

switch ($input) {
    case 1:
        echo "Seu saldo atual é R$ $saldo.\n";
        break;
    case 2:
        echo "Digite o valor do saque: ";
        $input = fgets(STDIN);
        if ($input > $saldo) {
            echo "\nNão há saldo suficiente.\n";
        } else{
            $saldo = $saldo - $input;
        }
        break;
    case 3:
        echo "Digite o valor do depósito: ";
        $input = fgets(STDIN);
        if ($input <= 0) {
            echo "\nValor inválido.\n";
        } else{
            $saldo = $saldo + $input;
        }
        break;
    case 4:
        echo "\nAdeus.";
        break; 
    default:
        echo "\nOpção inválida.\n";
        break;
}
} while ($input != 4);