<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo</title>

    <style>

        .Titulo{
            text-align: center;
        }

        label,
        input {
            margin-bottom: 10px;
        }

        fieldset {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1 class="Titulo">Realizar um Empréstimo</h1>
    <form action="realizarEmprestimo.php" method="post">
        <fieldset>
            <label for="nome_aluno">Nome do Aluno: </label>
            <input id="nome_aluno" name="nome_aluno" type="text"><br>

            <label for="cpf_aluno">CPF do Aluno: </label>
            <input id="cpf_aluno" name="cpf_aluno" type="text"><br>

            <label for="titulo_livro">Título do Livro: </label>
            <input id="titulo_livro" name="titulo_livro" type="text"><br>

            <label for="autor_livro">Autor do Livro: </label>
            <input id="autor_livro" name="autor_livro" type="text"><br>

            <br><button type="submit" name="realizarEmprestimo" value="RealizarEmprestimo">Confirmar</button>
            <button onclick="history.back()">Cancelar</button>

            <!-- Código PHP -->
            <?php require '../objetos.php'; ?>
            <?php if (isset($_POST['realizarEmprestimo'] )) : ?>
           <?php 
                $nome = $_POST['nome_aluno'];
                $cpf = $_POST['cpf_aluno'];
                $titulo = $_POST['titulo_livro']; 
                $autor = $_POST['autor_livro']; 
                ?>
                <?php if (empty($nome) || empty($cpf) || empty($titulo) || empty($autor)) : ?>
                    <?php header("Location: realizarEmprestimo.php")?>

                <?php else : ?>      
                <?php
                    $_SESSION['emprestimo'] = [
                    'nome_aluno' => $nome,
                    'cpf_aluno' => $cpf,
                    'titulo_livro' => $titulo, 
                    'autor_livro' => $autor
                    ];
                ?>
                <?php 

                ?>  
                    <?php header("Location: realizarEmprestimo.php"); ?>
                    <?php exit();?>
                <?php endif; ?>
            <?php endif; ?>
            <!-- Final do código PHP -->
        </fieldset>
    </form>
    <form action="index.php" method="post">
        <fieldset>
            <button>Voltar</button>
        </fieldset>    
    </form> 
</body>

</html>