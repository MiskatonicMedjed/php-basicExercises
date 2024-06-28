<?php

class Conta
{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly int $numeroConta,
        public readonly TipoDeConta $tipoDeConta,
        int $primeiroDeposito
    )    
    {
        $this->saldoEmCentavos = $primeiroDeposito;
    }

    public function saque(float $valorDoSaque): void{
        if($valorDoSaque > 0 && $valorDoSaque < $this->saldoEmCentavos){
        $this->saldoEmCentavos -= $valorDoSaque;
    }
    }
    
    public function deposito (float $valorDoDeposito): void{
        if($valorDoDeposito > 0){
        $this->saldoEmCentavos += $valorDoDeposito;
    }
    }
    
    public function consultarSaldo (): int //getter
    {
        return $this->saldoEmCentavos;
    }
}

enum TipoDeConta {
    case Poupanca;
    case Corrente;
    case Investimento;
    case Universitaria;

    public function temTaxa () : bool
    {
        return match ($this) 
        {
            TipoDeConta::Corrente, TipoDeConta::Investimento => true,
            TipoDeConta::Poupanca, TipoDeConta::Universitaria => false,
        };
    }
}

class ContaCorrente extends Conta
{
    private const float TAXA_SAQUE = 0.01;
    private const float TARIFA_MENSAL = 5_00;
    public function __construct (
        string $nomeTitular,
        int $numeroConta,
        int $primeiroDeposito
    )
    {
    $this->tipoDeConta = TipoDeConta::Corrente;
    Parent::__construct($nomeTitular, $numeroConta, $tipoDeConta, $primeiroDeposito);
    }

    #[Override]
    public function saque(float $valorDoSaque): void
    {
        $saqueTotal = $valorDoSaque + $valorDoSaque * self::TAXA_SAQUE;
        if($valorDoSaque > 0 && $valorDoSaque < $this->saldoEmCentavos)
        {
        $this->saldoEmCentavos -= $valorDoSaque; 
        }
    }

    public function cobrarTarifa(): void
    {
        $this->saldoEmCentavos -= self::TARIFA_MENSAL;
    }
}