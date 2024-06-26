<?php
$conta = [
    "titular" => 'Mr.Test',
    "saldo" => 1000
];

echo "\n
******************************
Bem vindo $conta[titular]
Seu saldo atual é: $conta[saldo]
******************************\n";

$input = 0;

while ($input != 4){
    echo "
1. Consultar saque.
2. Sacar.
3. Depositar.
4. Sair.
Digite sua opção: ";
    $input = fgets(STDIN);
    if ($input == 1) {
        echo "\n
        -------------------------\n
        Titular: $conta[titular]\n
        Saldo: $conta[saldo]\n
        -------------------------\n";
    } elseif ($input == 2) {
        echo "Digite o valor do saque: ";
        $input = fgets(STDIN);
        if ($input > $conta["saldo"]) {
            echo "\nNão há saldo suficiente.\n";
        } else{
            $conta["saldo"] = $conta["saldo"] - $input;
        }
    } elseif ($input == 3) {
        echo "Digite o valor do depósito: ";
        $input = fgets(STDIN);
        $conta["saldo"] = $conta["saldo"] + $input;
    } elseif ($input == 4) {
        echo "\nAdeus."; 
    } else {
        echo "\nOpção inválida.\n";
    }
}
var_dump($conta);