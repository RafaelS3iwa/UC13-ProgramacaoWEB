<?php
class Livros{

    private $idLivro;
    private $titulo;
    private $autor;
    private $valor;
    private $numeroPaginas;
    private $anoPublicacao;
    private $isbn; 
    private $disponibilidade = true; 

    function __construct(string $titulo, string $autor, float $valor, int $numeroPaginas, int $anoPublicacao, int $isbn){
        $this->titulo = $titulo; 
        $this->autor = $autor; 
        $this->valor = $valor;
        $this->numeroPaginas = $numeroPaginas; 
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

    public function getNumeroPaginas(){
        return $this->numeroPaginas;
    }

    public function getAnoPublicacao(){
        return $this->anoPublicacao;
    }

    public function getISBN(){
        return $this->isbn;
    }
    
    public function getDisponibilidade(){
        return $this->disponibilidade; 
    }

    public function emprestado(){
        $this->disponibilidade = false; 
    }

    public function devolvido(){
        $this->disponibilidade = true; 
    }
}