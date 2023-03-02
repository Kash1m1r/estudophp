<?php

$idades = [12,12,1,41,2,4,234];
$seleciona = $idades[3];

$conta1 = [
    "titular" => "Gabriel",
    "saldo" => 2000
];
$conta2 = [
    "titular" => "Beatriz",
    "saldo" => 1000
];
echo $seleciona;

for ($i = 0; $i < count($idades); $i++){
    echo $idades[$i] . PHP_EOL;
}
echo count($idades). PHP_EOL;

$contas = [$conta1, $conta2];
for ($i = 1; $i < count($conta1); $i++){
    echo $conta1['titular'] . PHP_EOL;
}

$contasUsers = [
    '111.241.212-43' => [
        "nome" => "Gabriel",
        "idade" => 24,
        "cor" => "Branco",
        "origem" => "Brasil"
    ],
    '114.141.212-44' => [
        "nome" => "Matias",
        "idade" => 21,
        "cor" => "Negro",
        "origem" => "Brasil"
    ],
    '344.124.121-24' => [
        "nome" => "Léo",
        "idade" => 29,
        "cor" => "Amarelo",
        "origem" => "Brasil"
    ],
];
$contasUsers['123.443.234-03'] = [
    "nome" => "Bisolli",
    "idade" => 44,
    "cor" => "Branco",
    "origem" => "Austrália"
];

foreach ($contasUsers as $i => $conta) {
    echo $i . PHP_EOL;
}

/*
foreach ($contas as $conta) {
    echo $conta['titular'] .PHP_EOL;
}
*/