<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Biblioteca</title>
    <style>
        form{
            max-width: 650px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Ve o bagulho aí</h1>

    <form action="visualizarLivros.php" method ="get"> 
        <fieldset>
            <h4>Aqui você poderá visualizar todos os livros cadastrados no sistema</h4>
            <button type="submit">Visualizar Livros</button>
        </fieldset><br>
    </form>

    <form action="visualizarAlunos.php" method ="get"> 
        <fieldset>
            <h4>Aqui você poderá visualizar todos os alunos cadastrados no sistema</h4>
            <button type="submit">Visualizar Aluno</button>
        </fieldset><br>
    </form>

    <form action="visualizarUsuarios.php" method ="get"> 
        <fieldset>
            <h4>Aqui você poderá visualizar todos os usuários cadastrados no sistema</h4>
            <button type="submit">Visualizar Usuário</button>
        </fieldset><br>
    </form>

    <form action="cadastrarLivro.php" method ="get"> 
        <fieldset>
            <h4>Clique aqui para cadastrar um livro ;)</h4>
            <button type="submit">Cadastrar Livro</button>
        </fieldset><br>
    </form>

    <form action="cadastrarAluno.php" method ="get"> 
        <fieldset>
            <h4>Clique aqui se deseja cadastrar um Aluno ;)</h4>
            <button type="submit">Cadastrar Aluno</button>
        </fieldset><br>
    </form>

    <form action="cadastrarUsuario.php" method ="get"> 
        <fieldset>
            <h4>Clique aqui se deseja cadastrar um Usuário ;)</h4>
            <button type="submit">Cadastrar Usuário</button>
        </fieldset><br>
    </form>

    <form action="realizarEmprestimo.php" method ="get"> 
        <fieldset>
            <h4>Ou clique aqui para realizar um Empréstimo de Livro</h4>
            <button type="submit">Realizar Emprestimo</button>
        </fieldset>

    </form>
</body>
</html>