<?php

$nome = 'Gabriel Gomes';

$verificaSobrenome = str_contains($nome, 'Pereira');

if($verificaSobrenome){
    echo "$nome é da minha família" .PHP_EOL;
}else{
    echo "$nome não é da minha família".PHP_EOL;
}

$url = 'https://alura.com.br';

if(str_starts_with($url, 'https')){
    echo 'É uma URL segura'.PHP_EOL;
}else{
    echo 'Não é uma URL segura' .PHP_EOL;
}

echo PHP_EOL;

if(str_ends_with($url, '.br')){
    echo 'É um domínio brasileiro'.PHP_EOL;
}else{
    echo 'Não é um domínio brasileiro' .PHP_EOL;
}