<?php 
declare (strict_types = 1);

require_once 'classes/Aluno.php';
require_once 'classes/Livros.php'; 
require_once 'classes/Emprestimo.php'; 
require_once 'classes/Biblioteca.php'; 

$aluno1 = new Aluno("Rafael", "2000-01-01", "rafa@teste.com", "14345678901", "12345678", "987654321");
$aluno2 = new Aluno("João", "2000-01-01", "joao@teste.com", "12345678901", "12345678", "987654321");

$livro1 = new Livros("Oyasumi Punpun", "Inio Asano", 49.99, 300, 2009, 1234567890123);
$livro2 = new Livros("Título do Livro", "Autor do Livro", 19.99, 300, 2022, 1234567890123);

$emprestimo = new Emprestimo($aluno1, $livro1);
$emprestimo->emprestimoPermitido(); 

$emprestimo->realizarEmprestimo($aluno1, $livro1);
$emprestimo->realizarEmprestimo($aluno1, $livro2);

$biblioteca = new Biblioteca();

    if  (isset($_POST["confirmar"])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $dataNascimento = $_POST['dataNascimento'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular']; 
        $aluno = new Aluno($nome, $dataNascimento, $email, $cpf, $telefone, $celular);
        $aluno->preencherDadosDoPOST(); 
        $biblioteca->adicionarAluno($aluno);
    }
//$emprestimo->devolverLivro($aluno1, $livro1); 
$biblioteca->adicionarAluno($aluno1);   
$biblioteca->adicionarAluno($aluno2); 
$biblioteca->adicionarLivro($livro1); 
$biblioteca->adicionarLivro($livro2); 
