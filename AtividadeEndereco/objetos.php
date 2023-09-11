<?php 
include 'Endereco.php';

$endereco = new Endereco();
$cep = "17511-230"; 

$endereco->getCep($cep);   

$endereco->imprimirEndereco($cep); 
$endereco->imprimirEnderecoArray($cep); 