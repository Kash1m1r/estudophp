<?php

class Conta{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;
    private static $numeroContas = 0;
    public function __construct(string $cpfTitular, string $nomeTitular){
        echo "Criando nova conta..." .PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        $this->validaNome($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo=0;

        self::$numeroContas ++;
    }

    public function __destruct(){
        self::$numeroContas--;
    }

    private function validaNome(string $nomeTitular){
        if(strlen($nomeTitular) < 5){
            echo "O nome precisa ter pelo menos 5 caracteres!";
            return;
        }
        echo "O usuário $nomeTitular foi criado com sucesso!";
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
    
    public static function numeroDeAcc():int{
        return self::$numeroContas;
    }
}
