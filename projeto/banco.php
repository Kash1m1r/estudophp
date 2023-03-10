<?php

require_once 'src/Conta.php';
require_once 'src/titular.php';

$conta1 = new Conta(new Titular('333.212.312-01', 'Gabriel'));
$conta2 = new Conta(new Titular('333.232.312-01', 'Maria'));

var_dump(($conta1));
var_dump(($conta2));
$conta1->depositar(5000);
$conta1->sacar(300);


echo $conta1->recpSaldo() .PHP_EOL;


echo Conta::numeroDeAcc();



#Encapsulamento- só mostrar o que é necessário