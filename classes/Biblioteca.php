<?php
class Biblioteca{
    private $listaAlunos= []; 
    private $listaLivros = [];

    public function __construct(Aluno $aluno, Livros $livro)
    {
        $this->listaAlunos = $aluno;
        $this->listaLivros = $livro;
    }

    public function getAluno(){
        return $this->listaAlunos;
    }

    public function getLivros(){
        return $this->listaLivros;
    }

    public function adicionarAluno(Aluno $aluno){
        $this->listaAlunos[] = $aluno;
    }

    public function adicionarLivro(Livros $livro){
        $this->listaLivros[] = $livro; 
    }
}