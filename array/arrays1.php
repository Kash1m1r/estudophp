<?php

$pessoas = [
    'Ana' => 33,
    'Bia' => null,
    'Fer' => 21
];
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

$alunos2 = [
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
];

function ordenarIdade (array $idade1, array $idade2):int{
    return $idade1['idade'] <=> $idade2['idade'];
}

usort($alunos, 'ordenarIdade');
var_dump($alunos);

/*
if (gettype($alunos) === 'array'){
    echo "A variável é um Array";
}else{
    echo "Isso não é um Array";
}
*/
if (is_array($alunos)){
    echo "É um array" .PHP_EOL;
}

var_dump(array_is_list($alunos));

var_dump(array_key_exists('idade', $alunos));

var_dump(isset($pessoas['Fer']));

var_dump(in_array(11, $pessoas));

echo array_search(33, $pessoas);

$diferenca = array_diff_key($alunos, $alunos2);
var_dump(array_keys($diferenca));