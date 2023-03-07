<?php

$email = 'gabriel@gmail.com';
$senha = '1112111111';

echo substr($email, 0, 8);
$posicao = strpos($email, 'gmail');

echo substr($email, 0 , $posicao);

echo strlen($senha). PHP_EOL;

if(strlen($senha) < 8){
    echo "Senha com poucos caracteres!". PHP_EOL;
}else{
    echo "Senha autorizada!". PHP_EOL;
}

echo strtoupper(($email)) . PHP_EOL;