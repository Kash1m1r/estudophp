<?php

require_once 'src/Conta.php';

$conta1 = new Conta('333.212.312-01', 'Gabriel Pereira');
var_dump(($conta1));
$conta1->depositar(5000);
$conta1->sacar(300);


echo $conta1->recpSaldo() .PHP_EOL;
echo $conta1->recpCpf() .PHP_EOL;




#Encapsulamento- só mostrar o que é necessário