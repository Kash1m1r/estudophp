<?php

class Titular{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNome($nome);
    }

    public function recupNome():string{
        return $this->nome;
    }
    public function recpCpf():string{
        return $this->cpf;
    }

    private function validaNome(string $nomeTitular){
        if(strlen($nomeTitular) < 5){
            echo "O nome precisa ter pelo menos 5 caracteres!" .PHP_EOL;
            return;
        }
        echo "O usuário $nomeTitular foi criado com sucesso!". PHP_EOL;
    }

}