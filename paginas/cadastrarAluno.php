<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>

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
    <h1 class="Titulo">Cadastrar um Aluno</h1>
    <form action="cadastrarAluno.php" method="post">
        <fieldset>
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text"><br>

            <label for="email">Digite seu email</label>
            <input id="email" name="email" type="text" placeholder="modelo@exemplo.com"><br>

            <label for="cpf">Digite seu CPF</label>
            <input id="cpf" name="cpf" type="text" placeholder="000.000.000-00"> <br>

            <label for="dataNascimento">Insira sua Data de Nascimento</label>
            <input id="dataNascimento" name="dataNascimento" type="date"><br>

            <label for="telefone">Digite seu Número de Telefone</label>
            <input id="telefone" name="telefone" type="text" placeholder="(00)0000-0000"><br>

            <label for="celular">Digite seu Número de Celular</label>
            <input id="celular" name="celular" type="text" placeholder="(00)00000-0000"><br>

            <br><button type="submit" name="cadastrarAluno" value="Confirmar">Confirmar</button>
            <button onclick="history.back()">Cancelar</button>

            <!-- Código PHP -->
            <?php require '../objetos.php'; ?>
            <?php if (isset($_POST['cadastrarAluno'] )) : ?>
           <?php 
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $cpf = $_POST['cpf'];
                $dataNascimento = $_POST['dataNascimento'];
                $telefone = $_POST['telefone'];
                $celular = $_POST['celular']; 
                ?>
                <?php if (empty($nome) || empty($email) || empty($cpf) || empty($dataNascimento) || empty($celular)) : ?>
                    <?php header("Location: cadastrarAluno.php")?>

                <?php else : ?>      
                <?php
                    $_SESSION['aluno'] = [
                    'nome' => $nome,
                    'dataNascimento' => $dataNascimento,
                    'email' => $email,
                    'cpf' => $cpf,
                    'telefone' => $telefone,
                    'celular' => $celular
                    ];
                ?>  
                    <?php header("Location: visualizarAlunos.php"); ?>
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