<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Usuarios</title>
</head>
<body>
    <h1 class = "Texto"> Usuarios</h1>
    <h4 class = "Texto">Todos os Usuarios no nosso sistema</h4>
    <table class = "tabela" border = "1">
        <thead>
            <th class = "tituloTabela" colspan="3">Usuarios</th>
            <tr> 
                <th>Nome</th>
                <th>E-mail</th>
                <th>Perfil</th>
            </tr>
        </thead>
        <tbody>
            <?php require '../objetos.php'; ?>
            <?php ?>
            <?php foreach($biblioteca->getUsuarios() as $usuario) : ?>
            <tr>
                <td style="text-align: center;"><?=$usuario->getNome()?></td>
                <td style="text-align: center;"><?=$usuario->getEmail()?></td>
                <td style="text-align: center;"><?=$usuario->getPerfil()?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="index.php" method="post">
    <fieldset>
        <button>Voltar</button>
    </fieldset>    
    </form> 
</body>
</html>