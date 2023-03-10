<?php

class Conta{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular){
        echo "Criando nova conta..." .PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo=0;
    }

    public function sacar(float $valorSaque){
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível para saque";
            return;
        }
        $this->saldo -= $valorSaque; 
        
    }

    public function depositar(float $valorDeposito):void{
        if($valorDeposito < 0){
            echo "Valor precisa ser positivo!";
            return;
        }
        $this->saldo += $valorDeposito;
        
    }
    public function transferir(float $valorTransferencia, Conta $contaDestino): void{
        if($valorTransferencia > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        $this->sacar($valorTransferencia);
        $contaDestino->depositar($valorTransferencia);
        
    }
    public function defineSaldo(float $sald){
        $this->saldo; 
    }
    public function recpSaldo():float{
        return $this->saldo;
    }

    public function recpCpf():string{
        return $this->cpfTitular;
    }
    
}
