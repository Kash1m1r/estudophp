<?php
require_once 'funcoes.php';
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

$contasUsers['111.241.212-43'] = sacarDinheiro($contasUsers['111.241.212-43'], 1500);
$contasUsers['344.124.121-24'] = adcionarDinheiro($contasUsers['344.124.121-24'], 600);


nomeMaior($contasUsers['111.241.212-43']);


foreach ($contasUsers as $i => $conta) {
    exibeMensagem(
        "$i {$conta['nome']} {$conta['saldo']} ". PHP_EOL
    );
}
