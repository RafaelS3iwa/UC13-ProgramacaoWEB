<?php
$nome = "Rafael Inoue";
$email = "dan.rafinha@hotmail.com";
$senha = "123456";
$idade = "21";

echo "<h1>Estrutura Condicional</h1>";

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de if()</h5>";

if ($idade > 18) //if simples 
{
        echo "O usuário $nome é maior de idade";
}

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de If e Else</h5>";

if ($senha == "123456") {
        echo "A Senha é Válida";
} else {
        echo "Senha Inválida";
}

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de If / Elseif e Else</h5>";

if ($idade <= 18) {
        echo 'Jovem';
} else if ($idade <= 21) {
        echo 'Adulto';
} else {
        echo 'Velho';
}

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de If Ternário</h5>";

echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de Condição para Formulário de Login</h5>";

if ($email == "dan.rafinha@hotmail.com" && $senha == "123456") {
        echo "Usuário autenticado";
} else {
        echo "Usuário ou Senha inválidos";
}

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Verificar se o número é par ou ímpar</h5>";

$numero = 10;

if ($numero % 2 == 0) { 
        echo "O número $numero é par";
} else {
        echo "O número $numero é ímpar";
}

//////////////////////////////////////////////
echo "<hr>";
echo "<h5>Mostre o Dia da Semana</h5>";

echo date ('w'); //0 é domingo, 1 é segunda e assim por diante... 
echo ("<br>");

$dia = date('w'); 

if ($dia == 0) {
        echo 'Hoje é Domingo';
} else if ($dia == 1) {
        echo 'Hoje é Segunda'; 
} else if ($dia == 2) {
        echo 'Hoje é Terça'; 
} else if ($dia == 3) {
        echo 'Hoje é Quarta'; 
} else if ($dia == 4) {
        echo 'Hoje é Quinta'; 
} else if ($dia == 5) {
        echo 'SEXTOU'; 
} else {
        echo 'Hoje é Sábado'; 
}       