<?php
class Biblioteca{
    private $listaAlunos= []; 
    private $listaLivros = [];

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