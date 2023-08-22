<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>

    <style>
        .boxSenha {
            border: 1px solid #cccccc;
            display: inline-block;
            padding: 20px;
            width: 50px;
            text-align: center;
            background-color: #fbec5d;
            font-size: 20px;
            color: #2D118F;
            font-weight: bold;
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1>Gerador de Senha</h1>

    <form action="gerador-senha.php" method="get">
        <label for="qtdeSenha">Quantidade de Senhas</label>
        <br>
        <input name="qtdeSenha" type="number" id="qtdeSenha">
        <br>
        <button type="submit">Gerar</button>
        <a href="gerador-senha.php">Cancelar Senha</a>
    </form>

    <hr>
    <?php if (isset($_GET['qtdeSenha'])) :  #Verifica se dentro do código o qtdeSenha foi inicializado 
    ?>

        <?php for ($i = 1; $i <= $_GET['qtdeSenha']; $i++) : ?>
            <div class="boxSenha">
                <?= $i ?>
            </div>
        <?php endfor; ?>

    <?php endif; //Essa é a forma padrão de se trabalhar com PHP dentro de HTML, em PHP pode abrir as chaves, aqui, fazer desse jeito
    ?>
    
    <hr>
    <p>
            Copyright &COPY; <?=date("d/m/Y")?>- Todos os direitos são preservador 
    </p>
</body>

</html>