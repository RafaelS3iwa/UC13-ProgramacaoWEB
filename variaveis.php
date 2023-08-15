<?php 

$nomeCompleto = 'Rafael Naoki inoue yasue';
$idade = 21; 
$status = true; 
$salario = 1500.00;

echo $nomeCompleto; 
echo "<hr>"; //Insere uma linha.

echo strtoupper($nomeCompleto); //Converte tudo para letra maiúscula. 
echo "<hr>";

echo strtolower($nomeCompleto); //Converte tudo para letra minúscula.
echo "<hr>";

echo ucwords($nomeCompleto); //Converte as primeiras letras em maiúsculas.
echo "<hr>";

echo str_replace("Rafael", "Akira", $nomeCompleto); /*Vai substituir algo na string seguindo o parâmetro: 
                                                    1-O que procuro, 2-O que quero, 3- Qual variável*/
echo "<hr>"; 

echo str_repeat("Rafael ",5); //Repete uma string numa quantidade de vezes declarada.
echo "<hr>";

echo isset($nome) ? 'True' : 'False'; //Verifica se a variável existe dentro da memória. 
echo "<hr>"; 

echo empty($nome) ?'True' : 'False'; //Verifica se a variável carrega algum dado. 
echo "<hr>"; 
?>