<?php
class Livros{

    private $idLivro;
    private $titulo;
    private $autor;
    private $valor;
    private $numeroPagina;
    private $anoPublicacao;
    private $isbn; 

    function __construct(string $titulo, string $autor, float $valor, int $numeroPagina, int $anoPublicacao, int $isbn){
        $this->titulo = $titulo; 
        $this->autor = $autor; 
        $this->valor = $valor;
        $this->numeroPagina = $numeroPagina; 
        $this->anoPublicacao = $anoPublicacao; 
        $this->isbn = $isbn; 
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getNumeroPagina(){
        return $this->numeroPagina;
    }

    public function getAnoPublicacao(){
        return $this->anoPublicacao;
    }

    public function getISBN(){
        return $this->isbn;
    }
    
}