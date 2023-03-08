<?php

$telefones = ['(21) 22222-22123', '(33) 132412-22123', '(98) 33232-22123'];

foreach($telefones as $telefone){
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefone);
    if($telefoneValido){
        echo 'Telefone Válido' . PHP_EOL;
    }else{
        echo 'Telefone Inválido' . PHP_EOL;
    }
}