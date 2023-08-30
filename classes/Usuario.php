<?php
class Usuario{

    private $idUsuario;
    private $nome; 
    private $email;
    private $senha; 
    private $perfil; 

    function __construct(string $nome, string $email, string $senha, string $perfil)
    {
        $this->nome = $nome; 
        $this->email = $email; 
        $this->senha = $senha; 
        $this->perfil = $perfil; 
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getPerfil(){
        return $this->perfil;
    }
}