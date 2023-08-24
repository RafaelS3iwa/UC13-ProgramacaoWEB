<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>

    <style>
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
    <h1>Cadastrar um Aluno</h1>

    <!-- Código PHP -->
    <?php

    $mensagemDeErro = ' ';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['nome']) || empty($_POST['dataNascimento']) || empty($_POST['email']) || empty($_POST['cpf']) ||  empty($_POST['celular'])) {
            $mensagemDeErro = 'Por favor, preencha todos os campos';
        } else {
            require '../objetos.php';
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cpf = $_POST['cpf'];
            $dataNascimento = $_POST['dataNascimento'];
            $telefone = $_POST['telefone'];
            $celular = $_POST['celular'];


            $aluno = new Aluno($nome, $dataNascimento, $email, $cpf, $telefone, $celular);

            echo '<p>O cadastro do aluno foi bem sucedido!</p>';
        }
    }
    ?>
<!-- Final do código PHP -->

    <form action="cadastrarAluno.php" method="post">
        <fieldset>
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text"><br>

            <label>Digite seu email</label>
            <input id="email" name="email" type="text" placeholder="modelo@exemplo.com"><br>

            <label>Digite seu CPF</label>
            <input id="cpf" name="cpf" type="text" placeholder="000.000.000-00"> <br>

            <label>Insira sua Data de Nascimento</label>
            <input id="dataNascimento" name="dataNascimento" type="date"><br>

            <label>Digite seu Número de Telefone</label>
            <input id="telefone" name="telefone" type="text" placeholder="(00)0000-0000"><br>

            <label>Digite seu Número de Celular</label>
            <input id="celular" name="celular" type="text" placeholder="(00)00000-0000"><br>

            <br><button type="submit">Confirmar</button>
            <button type="reset">Cancelar</button>
        </fieldset>
    </form>
</body>

</html>