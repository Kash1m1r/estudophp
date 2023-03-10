<?php

require_once 'src/Conta.php';

$conta1 = new Conta('333.212.312-01', 'Gabriel');
$conta2 = new Conta('333.232.312-01', 'Maria');

var_dump(($conta1));
$conta1->depositar(5000);
$conta1->sacar(300);


echo $conta1->recpSaldo() .PHP_EOL;
echo $conta1->recpCpf() .PHP_EOL;

echo Conta::numeroDeAcc();



#Encapsulamento- só mostrar o que é necessário