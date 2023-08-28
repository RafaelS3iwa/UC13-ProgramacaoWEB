<?php
class Biblioteca{
    private $listaAlunos= []; 
    private $listaLivros = [];
    private $aluno; 

    public function getAluno(){
        return $this->listaAlunos;
    }

    public function getLivros(){
        return $this->listaLivros;
    }

    public function cadastrarAluno(Aluno $aluno){
        if(isset($_POST['confirmar'])) {  
            $_SESSION['aluno'] = [
                'nome' => $_POST['nome'],
                'dataNascimento' => $_POST['dataNascimento'],
                'email' => $_POST['email'],
                'cpf' => $_POST['cpf'],
                'telefone' => $_POST['telefone'],
                'celular' => $_POST['celular']
            ];
        }
    }

    
    public function cadastrarLivro(Livros $livro){
        if(isset($_POST['confirmar'])) {  
            $_SESSION['livro'] = [
                'titulo' => $_POST['titulo'],
                'autor' => $_POST['autor'],
                'valor' => $_POST['valor'],
                'numeroPaginas' => $_POST['numeroPaginas'],
                'anoPublicacao' => $_POST['anoPublicacao'],
                'isbn' => $_POST['isbn']
            ];
        }
    }


    public function adicionarAluno(Aluno $aluno){
        $this->listaAlunos[] = $aluno;
        if($this->cadastrarAluno($aluno)){
            $this->listaAlunos[] = $aluno; 
        }
    }

    public function adicionarLivro(Livros $livro){
        $this->listaLivros[] = $livro; 
    }
}