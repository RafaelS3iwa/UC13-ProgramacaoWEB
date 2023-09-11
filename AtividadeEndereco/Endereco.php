<?php 
class Endereco{
    
    private $cep; 
    private $logradouro;
    private $bairro;
    private $localidade;
    private $uf;
    private $dadosEndereco; 

    public function getCep(){
        return $this->cep; 
    }

    public function buscarEndereco($cep){

         $resultado = file_get_contents("https://viacep.com.br/ws/$cep/json/");

         $dadosEndereco = json_decode($resultado, true); 

         //var_dump($dadosEndereco); 
         return $dadosEndereco; 
    }

    public function getBairro($cep){
        $this->dadosEndereco = $this->buscarEndereco($cep); 
        $bairro = $this->dadosEndereco['bairro']; 
        return $this->bairro;
    }
    public function imprimirEndereco($cep){
        $this->dadosEndereco = $this->buscarEndereco($cep); 

        echo '<h1><b>Endereço</b></h1>'; 
        echo '<p><b>CEP: </b>' .$this->dadosEndereco['cep'] .'</p>'; 
        echo '<p><b>Logradouro: </b>' .$this->dadosEndereco['logradouro'] . '</p>'; 
        echo '<p><b>Bairro: </b>' .$this->dadosEndereco['bairro'] . '</p>'; 
        echo '<p><b>Cidade: </b>' .$this->dadosEndereco['localidade'] .'</p>'; 
        echo '<p><b>Estado: </b>' .$this->dadosEndereco['uf'] . '</p>'; 
    }

    public function imprimirEnderecoArray($cep){
        $this->dadosEndereco = $this->buscarEndereco($cep);
        
        echo '<h1><b>Endereço Completo</b></h1>';
        var_dump($this->dadosEndereco); 
    }
}