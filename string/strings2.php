<?php

$nome = 'joão canaã';
$email = '      gabriel@gmail.com';
$senha = 'aéeaãao';

echo substr($email, 0, 8);
$posicao = strpos($email, 'gmail');

echo substr($email, 0 , $posicao);

echo strlen($senha). PHP_EOL;

if(mb_strlen($senha) < 8){
    echo "Senha com poucos caracteres!". PHP_EOL;
}else{
    echo "Senha autorizada!". PHP_EOL;
}

echo strtoupper(($email)) . PHP_EOL;
echo strtolower($nome. PHP_EOL);

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome:' . $nome .PHP_EOL;
echo 'Sobrenome:' . $sobrenome .PHP_EOL;

$csv = 'Gabriel Pereira,24,gabrielgomes@ma.def.br';
var_dump(explode(',',$csv));

echo trim($email);