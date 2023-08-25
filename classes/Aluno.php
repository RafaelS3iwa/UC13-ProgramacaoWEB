<?php 
class Aluno {
    
    private $idAluno; 
    private $nome; 
    private $dataNascimento; 
    private $email; 
    private $cpf; 
    private $telefone; 
    private $celular; 
    private $livros = []; 

    function __construct(string $nome, $dataNascimento, string $email, string $cpf, string $telefone, string $celular){
        $this->nome = $nome; 
        $this->dataNascimento = $dataNascimento; 
        $this->email = $email; 
        $this->cpf = $cpf; 
        $this->telefone = $telefone; 
        $this->celular = $celular; 
    }
    
    public function preencherDadosDoPOST() {
        $this->nome = $_POST['nome'];
        $this->dataNascimento = $_POST['dataNascimento'];
        $this->email = $_POST['email'];
        $this->cpf = $_POST['cpf'];
        $this->telefone = $_POST['telefone'];
        $this->celular = $_POST['celular'];
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function getdataNascimento(){
        return $this->dataNascimento;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;  
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function getCelular(){
        return $this->celular; 
    }

    public function getLivros(){
        return $this->livros; 
    }

    public function addLivros(Livros $livro){
        $this->livros[] = $livro; 
    }

    public function mostrarQtLivroEmprestado(){
         echo count($this->livros); 
    }

    public function removerLivro(Livros $livro){
        $livroIndex = array_search($livro, $this->livros); 
        if($livroIndex !== false){
            unset($this->livros[$livroIndex]); 
        }
    }
}