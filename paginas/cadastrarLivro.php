<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>

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
    <h1 class="Titulo">Cadastrar um Livro</h1>
    <form action="cadastrarLivro.php" method="post">
        <fieldset>
            <label for="titulo">Digite o Titulo: </label>
            <input id="titulo" name="titulo" type="text"><br>

            <label for="autor">Digite o Autor: </label>
            <input id="autor" name="autor" type="text" placeholder="modelo@exemplo.com"><br>

            <label for="valor">Digite o Valor: </label>
            <input id="valor" name="valor" type="text" placeholder="000.000.000-00"> <br>

            <label for="numeroPaginas">Insira o número de Páginas: </label>
            <input id="numeroPaginas" name="numeroPaginas" type="float"><br>

            <label for="anoPublicacao">Digite o Ano de Publicação: </label>
            <input id="anoPublicacao" name="anoPublicacao" type="int" placeholder="(00)0000-0000"><br>

            <label for="isbn">Digite o ISBN: </label>
            <input id="isbn" name="isbn" type="text" placeholder="(00)00000-0000"><br>

            <br><button type="submit" name="cadastrarLivro" value="CadastrarLivro">Confirmar</button>
            <button onclick="history.back()">Cancelar</button>

            <!-- Código PHP -->
            <?php require '../objetos.php'; ?>
            <?php if (isset($_POST['cadastrarLivro'] )) : ?>
           <?php 
                $titulo = $_POST['titulo'];
                $autor = $_POST['autor'];
                $valor = $_POST['valor'];
                $numeroPaginas = $_POST['numeroPaginas'];
                $anoPublicacao = $_POST['anoPublicacao'];
                $isbn = $_POST['isbn']; 
                ?>
                <?php if (empty($titulo) || empty($autor) || empty($valor) || empty($numeroPaginas) || empty($isbn)) : ?>
                    <?php header("Location: cadastrarLivro.php")?>

                <?php else : ?>      
                <?php
                    $_SESSION['livro'] = [
                    'titulo' => $titulo,
                    'autor' => $autor,
                    'valor' => $valor,
                    'numeroPaginas' => $numeroPaginas,
                    'anoPublicacao' => $anoPublicacao,
                    'isbn' => $isbn
                    ];
                ?>  
                    <?php header("Location: visualizarLivros.php"); ?>
                    <?php exit();?>
                <?php endif; ?>
            <?php endif; ?>
            <!-- Final do código PHP -->
        </fieldset>
    </form>
    <form action="biblioteca.php" method="post">
        <fieldset>
            <button>Voltar</button>
        </fieldset>    
    </form> 
</body>

</html>