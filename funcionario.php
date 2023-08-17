<?php 

//O => serve para atribuir valores dentro de um índice
//O exemplo abaixo é um array multidimensional
//Não escrever o índice, o PHP deixa o índice padrão, ou seja, começando com 0

$listaFuncionarios = [
    [ 
        "id" => 1, 
        "nome" => "Rafael Naoki Inoue Yasue",
        "email" => "rafa@teste.com",
        "telefone" => "(14)99882-3653"    
    ],
    [
        "id" => 2, 
        "nome" => "Aarão Abbate Vieira",
        "email" => "aaraum@teste.com",
        "telefone" => "(14)998102-8723"  
    ],
    2 => [
        "id" => 3, 
        "nome" => "Miguel Perez Silva",
        "email" => "miguel@teste.com",
        "telefone" => "(14)998456-2423"  
    ],
    3 => [
        "id" => 4, 
        "nome" => "Giovana Thereza Gonçalves",
        "email" => "giovana@teste.com",
        "telefone" => "(14)998872-5723" 
    ]   
];

//num caso de montar um array esse jeito é melhor
$listaFuncionarios[4]["id"] = 5; 
$listaFuncionarios[4]["nome"] = "Allan Vinicius";  
$listaFuncionarios[4]["email"] = "allan@teste.com"; 
$listaFuncionarios[4]["telefone"] = "(14)99257-7868";

//Assim deixa o índice dinâmico 
$quantidadeFuncionario = count($listaFuncionarios);

$listaFuncionarios[$quantidadeFuncionario]["id"] = 6; 
$listaFuncionarios[$quantidadeFuncionario]["nome"] = "Naruto";  
$listaFuncionarios[$quantidadeFuncionario]["email"] = "naruto@teste.com"; 
$listaFuncionarios[$quantidadeFuncionario]["telefone"] = "(14)99857-2948";

// print var_dump($listaFuncionarios);

echo "<br><b>A quantidade de funcionários é: </b>" .count($listaFuncionarios);
