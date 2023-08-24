<?php 

$host = "localhost"; 
$dbname = "biblioteca"; 
$username = "root"; 
$password = "senac2023"; 

try{
    
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password); //charset é para aceitar caracteres especiais 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conexão com o banco de dados foi estabelecida!'; 
}catch(PDOException $e){ //PDO é o mais utilizado 
    echo 'Erro na conexão com o banco de dados' .$e->getMessage(); 
}