<?php
class Biblioteca{
    private $alunos= []; 
    private $livros = [];

    public function __construct(Aluno $aluno, Livros $livro)
    {
        $this->alunos = $aluno;
        $this->livros = $livro;
    }

    public function getAluno(){
        return $this->alunos;
    }

    public function getLivros(){
        return $this->livros;
    }

    public function adicionarAluno(Aluno $aluno){
        $this->alunos[] = $aluno; 
    }

    public function adicionarLivro(Livros $livro){
        $this->livros[] = $livro; 
    }
}