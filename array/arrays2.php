<?php
$alunos = [
    [
        'nome' => 'Gabriel',
        'idade' => '24',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Beatriz',
        'idade' => '34',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Miguel',
        'idade' => '21',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'André',
        'idade' => '18',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Lucas',
        'idade' => '42',
        'Nacionalidade' => null
    ],

];
$alunos = [
    [
        'nome' => 'João',
        'idade' => '24',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Bianca',
        'idade' => '25',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Renan',
        'idade' => '22',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Manu',
        'idade' => '19',
        'Nacionalidade' => 'Brasileiro'
    ],
    [
        'nome' => 'Maisa',
        'idade' => '21',
        'Nacionalidade' => null
    ],

];

$teste = [
    'Beatriz',
    'Luan'
];
$teste2 = [
    'Matheus',
    'Fagner'
];

/*
$juntaAluno = array_merge($alunos, $alunos2);
var_dump($juntaAluno);
*/
$junta = [...$teste, ...$teste2];
var_dump($junta);