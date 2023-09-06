<?php
require_once 'classes/Aluno.php';
require_once 'classes/Livros.php'; 
require_once 'classes/Emprestimo.php'; 
require_once 'classes/Usuario.php'; 
require_once 'classes/Biblioteca.php'; 

session_start();

$aluno1 = new Aluno("Rafael", "2000-01-01", "rafa@teste.com", "14345678901", "12345678", "987654321");
$aluno2 = new Aluno("João", "2000-01-01", "joao@teste.com", "12345678901", "12345678", "987654321");

$livro1 = new Livros("Oyasumi Punpun", "Inio Asano", 49.99, 300, 2009, 1234567890123);
$livro2 = new Livros("Título do Livro", "Autor do Livro", 19.99, 300, 2022, 1234567890123);

$emprestimo = new Emprestimo($aluno1, $livro1);
$emprestimo->emprestimoPermitido(); 

$emprestimo->realizarEmprestimo($aluno1, $livro1);
$emprestimo->realizarEmprestimo($aluno1, $livro2);

if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = new Biblioteca();
}

$biblioteca = $_SESSION['biblioteca'];

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarAluno'])){
    header("Location: visualizarAlunos.php");
    $aluno = new Aluno(
        $_POST['nome'],
        $_POST['dataNascimento'],
        $_POST['email'],
        $_POST['cpf'],
        $_POST['telefone'],
        $_POST['celular']
        );

    $biblioteca->adicionarAluno($aluno);
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarLivro'])){
    header("Location: visualizarLivros.php");
    $livro = new Livros(
        $_POST['titulo'],
        $_POST['autor'],
        $_POST['valor'],
        $_POST['numeroPaginas'],
        $_POST['anoPublicacao'],
        $_POST['isbn']
        );

    $biblioteca->adicionarLivro($livro);
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrarUsuario'])){
    header("Location: visualizarUsuarios.php");
    $usuario = new Usuario(
        $_POST['nome'],
        $_POST['email'],
        $_POST['senha'], 
        $_POST['perfil']
        );

    $biblioteca->adicionarUsuario($usuario);
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['realizarEmprestimo'])){
    header("Location: realizarEmprestimo.php");
    
    $nomeAluno = $_POST['nomeAluno']; 
    $cpfAluno = $_POST['cpfAluno'];
    $tituloLivro = $_POST['tituloLivro']; 
    $autorLivro = $_POST['autorLivro']; 

    $alunoEncontrado = false; 
    $livroEncontrado = false; 

    foreach($biblioteca->getAluno() as $aluno){
        if($aluno->getNome() === $nomeAluno && $aluno->getCPF() === $cpfAluno);
        $alunoEncontrado = true; 
        break; 
    }

    foreach($biblioteca->getLivros() as $livro){
        if($livro->getTitulo() === $tituloLivro && $livro->getAutor() === $autorLivro){
            $livroEncontrado = true; 
            break;
        }
    }

    if($livroEncontrado = true && $alunoEncontrado = true){
        
    }

}

//session_destroy();

//$emprestimo->devolverLivro($aluno1, $livro1); 
