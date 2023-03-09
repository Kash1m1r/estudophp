<?php

class Conta{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;

    public function sacar(float $valorSaque){
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível para saque";
        }else{
            $this->saldo -= $valorSaque; 
        }
    }

    public function depositar(float $valorDeposito):void{
        if($valorDeposito < 0){
            echo "Valor precisa ser positivo!";
        }else{
            $this->saldo += $valorDeposito;
        }
    }
}
