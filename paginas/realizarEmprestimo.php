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
            <label for="nomeAluno">Nome do Aluno: </label>
            <input id="nomeAluno" name="nomeAluno" type="text"><br>

            <label for="cpfAluno">CPF do Aluno: </label>
            <input id="cpfAluno" name="cpfAluno" type="text"><br>

            <label for="tituloLivro">Título do Livro: </label>
            <input id="tituloLivro" name="tituloLivro" type="text"><br>

            <label for="autorLivro">Autor do Livro: </label>
            <input id="autorLivro" name="autorLivro" type="text"><br>

            <br><button type="submit" name="realizarEmprestimo" value="RealizarEmprestimo">Confirmar</button>
            <button onclick="history.back()">Cancelar</button>

            <!-- Código PHP -->
            <?php require '../objetos.php'; ?>
            <?php if (isset($_POST['realizarEmprestimo'] )) : ?>
           <?php 
                $nome = $_POST['nomeAluno'];
                $cpf = $_POST['cpfAluno'];
                $titulo = $_POST['tituloLivro']; 
                $autor = $_POST['autorLivro']; 
                ?>
                <?php if (empty($nome) || empty($cpf) || empty($titulo) || empty($autor)) : ?>
                    <?php header("Location: realizarEmprestimo.php")?>

                <?php else : ?>      
                <?php


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