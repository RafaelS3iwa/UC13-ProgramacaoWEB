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
    <h1 class="Titulo">Cadastrar um Usuario</h1>
    <form action="cadastrarUsuario.php" method="post">
        <fieldset>
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text"><br>

            <label for="email">Digite seu E-mail: </label>
            <input id="email" name="email" type="text" placeholder="modelo@exemplo.com"><br>
       
            <label for="senha">Digite sua Senha: </label>
            <input id="senha" name="senha" type="text"><br>
    
            <label for="perfil">Digite o tipo de perfil: </label>
            <input id="perfil" name="perfil" type="text"><br>


            <br><button type="submit" name="cadastrarUsuario" value="CadastrarUsuario">Confirmar</button>
            <button onclick="history.back()">Cancelar</button>

            <!-- Código PHP -->
            <?php require '../objetos.php'; ?>
            <?php if (isset($_POST['cadastrarUsuario'] )) : ?>
           <?php 
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha']; 
                $perfil = $_POST['perfil']; 
                ?>
                <?php if (empty($nome) || empty($email) || empty($senha) || empty($perfil)) : ?>
                    <?php header("Location: cadastrarUsuario.php")?>

                <?php else : ?>      
                <?php
                    $_SESSION['usuario'] = [
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha, 
                    'perfil' => $perfil
                    ];
                ?>  
                    <?php header("Location: visualizarUsuarios.php"); ?>
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