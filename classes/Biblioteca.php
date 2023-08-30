<?php
class Biblioteca{
    private $listaAlunos= []; 
    private $listaLivros = [];
    private $listaUsuarios = []; 
    private $aluno; 

    public function getAluno(){
        return $this->listaAlunos;
    }

    public function getLivros(){
        return $this->listaLivros;
    }

    public function getUsuarios(){
        return $this->listaUsuarios; 
    }

    public function adicionarAluno(Aluno $aluno){
        $this->listaAlunos[] = $aluno;
    }

    public function adicionarLivro(Livros $livro){
        $this->listaLivros[] = $livro; 
    }

    public function adicionarUsuario(Usuario $usuario){
        $this->listaUsuarios[] = $usuario;
    }
}