<?php

class Conta{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    

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
}
