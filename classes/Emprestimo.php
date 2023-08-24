<?php
class Emprestimo {
    
    private $idEmprestimo; 
    private $aluno; 
    private $livro; 
    private $multa; 
    private $dataEmprestimo; 
    private $dataDevolucao; 

    function __construct(Aluno $aluno,  Livros $livro)
    {
        $this->aluno = $aluno;
        $this->livro = $livro;
    }

    public function getAluno(){
        return $this->aluno; 
    }

    public function getLivro(){
        return $this->livro;
    }    

    public function dataEmprestimo(){ #Calculo da Data
        $dataEmprestimo =  new DateTime(); 
        $dataDevolucao =  clone $dataEmprestimo; 
        $dataDevolucao->add(new DateInterval('P1M')); 
        $this->dataEmprestimo = $dataEmprestimo->format('d-m-Y');
        $this->dataDevolucao = $dataDevolucao->format('d-m-Y');
    }
    
    public function emprestimoPermitido(){
        return count($this->aluno->getLivros()) < 4; 
    }

    public function realizarEmprestimo(Aluno $aluno, Livros $livro){
        if($livro->getDisponibilidade()){
            $livro->emprestado();
            $aluno->addLivros($livro); 
        }else{
            echo 'Livro indisponível'; 
        }
    }

    public function devolverLivro(Aluno $aluno, Livros $livro){
        if(!$livro->getDisponibilidade()){
            $livro->devolvido();
            $aluno->removerLivro($livro);
        }
    }

    public function imprimirDetalhes() { #Imprime os detalhes 
        $this->dataEmprestimo();
        
        echo '<b>Detalhes do Empréstimo:<hr></b>';
        echo '<b>Aluno<br></b> ';
        echo '<b>Nome do aluno:</b> ' . $this->aluno->getNome() . '<br>';
        echo '<b>Email do aluno:</b> ' .$this->aluno->getEmail() . '<hr>'; 

        echo '<b>Livro<br></b> ';
        echo '<b>Título do livro:</b> '. $this->livro->getTitulo() . '<br>';
        echo '<b>Autor:</b> ' .$this->livro->getAutor() . '<hr>'; 

        echo '<b>Data de Empréstimo:</b> ' .$this->dataEmprestimo . '<br>';
        echo '<b>Data de Devolução:</b> ' .$this->dataDevolucao; 
    }

    
}