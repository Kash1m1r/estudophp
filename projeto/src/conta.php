<?php

class Conta{
    private $cpfTitular;
    private $saldo;
    private $titular;
    private static $numeroContas = 0;
    public function __construct(Titular $titular){
        echo "Criando nova conta..." .PHP_EOL;

        $this->titular = $titular;
        $this->saldo=0;

        self::$numeroContas ++;
    }

    public function __destruct(){
        self::$numeroContas--;
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
    
    public static function numeroDeAcc():int{
        return self::$numeroContas;
    }
}
