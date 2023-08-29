<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Alunos Cadastrados</title>
</head>
<body>
    <h1 class = "Texto">Alunos Cadastrados</h1>
    <h4 class = "Texto">Todos os Alunos cadastrados no nosso sistema</h4>
    <table class = "tabela" border = "1">
        <thead>
            <th class = "tituloTabela" colspan="7">Alunos</th>
            <tr> 
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>E-mail</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Livros Emprestados</th>
            </tr>
        </thead>
        <tbody>
            <?php require '../objetos.php'; ?>
            <?php ?>
            <?php foreach($biblioteca->getAluno() as $aluno) : ?>
            <tr>
                <td style="text-align: center;"><?=$aluno->getNome()?></td>
                <td style="text-align: center;"><?=$aluno->getdataNascimento()?></td>
                <td style="text-align: center;"><?=$aluno->getEmail()?></td>
                <td style="text-align: center;"><?=$aluno->getCpf()?></td>
                <td style="text-align: center;"><?=$aluno->getTelefone()?></td>
                <td style="text-align: center;"><?=$aluno->getCelular()?></td>
                <td style="text-align: center;"><?=$aluno->mostrarQtLivroEmprestado()?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="biblioteca.php" method="post">
    <fieldset>
        <button>Voltar</button>
    </fieldset>    
    </form> 
</body>
</html>