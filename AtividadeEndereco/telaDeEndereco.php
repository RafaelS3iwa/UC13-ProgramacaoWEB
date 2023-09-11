<?php
    require_once 'Endereco.php';
    
    if(isset($_POST['cep']) && !empty($_POST['cep'])){
        
        $endereco = new Endereco(); 
        $cep = $_POST['cep']; 

        $endereco->getCep($cep);
        
        $endereco->buscarEndereco($cep); 
        $endereco->imprimirEndereco($cep);
        $endereco->imprimirEnderecoArray($cep);
    }else{

        header("location:buscar-endereco.php");
        exit; 
    }
?>
