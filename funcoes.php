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
        echo "Valor atual: R$ {$conta['saldo']}". PHP_EOL;
    }
    return $conta;
}

function nomeMaior(array &$conta){
    $conta['nome'] = mb_strtoupper($conta['nome']);
}
