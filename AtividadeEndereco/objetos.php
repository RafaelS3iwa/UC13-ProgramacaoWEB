<?php 
include 'Endereco.php';

$endereco = new Endereco();
$cep1 = "17511-230"; 

$endereco->getCep($cep1);   
$endereco->imprimirEndereco($cep1); 
