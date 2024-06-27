<?php

class Conta
{
    private int $saldoEmCentavos;
    private string $nomeTitular;
    private string $numeroConta;

    /*public function setSaldoEmCentavos(int $saldoEmCentavos): void
    {
        $this->saldoEmCentavos = $saldoEmCentavos;
    }*/

    public function getSaldoEmCentavos(): int
    {
        return $this->saldoEmCentavos;
    }

    /*public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }*/

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    /*public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }*/

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function saque(float $valorDoSaque): void{
        if($valorDoSaque > 0 && $valorDoSaque < $this->saldoEmCentavos){
        $this->saldoEmCentavos = $this->saldoEmCentavos - $valorDoSaque;
    }
    }
    public function deposito(float $valorDoDeposito): void{
        if($valorDoDeposito > 0){
        $this->saldoEmCentavos = $this->saldoEmCentavos + $valorDoDeposito;
    }
    }
}