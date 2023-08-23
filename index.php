<?php 
declare (strict_types = 1);

require_once 'classes/Aluno.php';
require_once 'classes/Livros.php'; 
require_once 'classes/Emprestimo.php'; 

$aluno1 = new Aluno("João", "2000-01-01", "joao@example.com", "12345678901", "12345678", "987654321");

$livro1 = new Livros("Título do Livro", "Autor do Livro", 19.99, 300, 2022, 1234567890123);
$livro2 = new Livros("Título do Livro", "Autor do Livro", 19.99, 300, 2022, 1234567890123);
$livro3 = new Livros("Título do Livro", "Autor do Livro", 19.99, 300, 2022, 1234567890123);
$livro4 = new Livros("Título do Livro", "Autor do Livro", 19.99, 300, 2022, 1234567890123);

$aluno1->addLivros($livro1); 
$aluno1->addLivros($livro2); 
$aluno1->addLivros($livro3); 
//$aluno1->addLivros($livro4); 

$emprestimo = new Emprestimo($aluno1, $livro1);

if ($emprestimo->emprestimoPermitido()) { 
    $emprestimo->imprimirDetalhes();
} else {
    echo "O aluno não pode fazer mais empréstimos.\n";
}