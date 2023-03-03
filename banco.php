<?php

function exibeMensagem(string $mensagem) {
    echo "{$mensagem}" .PHP_EOL;
}

function sacarDinheiro(array $conta, float $valor): array {
    if ($valor > $conta['saldo']) {
        echo "Você não possui saldo suficiente para realizar o saque". PHP_EOL . "Saldo disponível: {$conta['saldo']}"  . PHP_EOL . "Valor solicitado: {$valor} ";
    }else{
        $conta['saldo'] -= $valor;
        echo "Saque realizado com sucesso!" . PHP_EOL ."Valor atual: {$conta['saldo']} " . PHP_EOL;
    }
    return $conta;
}

function adcionarDinheiro(array $conta, float $valor): array {
    if ($valor > 1000) {
        echo "Valor de depósito é de no máximo R$1000. Caso queira colocar um valor a mais, terá que fazer outra operação." . PHP_EOL;
        echo "Valor solicitado: R$" . $valor;
    }else{
        $conta['saldo'] += $valor;
        echo "Depósito de R$ {$valor}" ." realizado com sucesso" . PHP_EOL;
        echo "Valor atual: R$ {$conta['saldo']}";
    }
    return $conta;
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

$contasUsers['111.241.212-43'] = sacarDinheiro($contasUsers['111.241.212-43'], 1500);
$contasUsers['344.124.121-24'] = adcionarDinheiro($contasUsers['344.124.121-24'], 600);
/*
foreach ($contasUsers as $i => $conta) {
    echo $i . "" . $conta['nome']. '' . $conta['saldo'] . PHP_EOL;
}
*/