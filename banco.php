<?php

function exibeMensagem($mensagem) {
    echo $mensagem .PHP_EOL;
}
$contasUsers = [
    '111.241.212-43' => [
        "nome" => "Gabriel",
        "idade" => 24,
        "cor" => "Branco",
        "origem" => "Brasil",
        'saldo' => 2002
    ],
    '114.141.212-44' => [
        "nome" => "Matias",
        "idade" => 21,
        "cor" => "Negro",
        "origem" => "Brasil",
        'saldo' => 20034
    ],
    '344.124.121-24' => [
        "nome" => "Léo",
        "idade" => 29,
        "cor" => "Amarelo",
        "origem" => "Brasil",
        'saldo' => 500
    ],
];

$contasUsers['344.124.121-24']['saldo'] -= 500;
foreach ($contasUsers as $i => $conta) {
    echo $i . "" . $conta['nome']. '' . $conta['saldo'] . PHP_EOL;
}

if ( 500 > $contasUsers['344.124.121-24']['saldo']) {
    exibeMensagem("Você não pode sacar esse valor") ;
}