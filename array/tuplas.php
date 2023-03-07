<?php
$dados = [
    'nome' =>'Vini',
    'idade' => 10,
    'nota' => 24
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

extract(($dados));
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));