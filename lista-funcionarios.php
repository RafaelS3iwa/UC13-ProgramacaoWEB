<?php
    include "funcionario.php"; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários</title>
</head>

<body>
    <h1><b>Lista de Funcionários</b></h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ação</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($listaFuncionarios as $funcionario): ?>
                <tr>
                    <!-- short echo -->
                    <th><?=$funcionario["id"]?></th> 
                    <td><?=$funcionario["nome"]?></td>
                    <td><?=$funcionario["email"]?></td>
                    <td><?=$funcionario["telefone"]?></td>
                    <td>Editar Visualizar Excluir</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"><center>Foi encontrado 6 funcionários cadastrados</center></td>
            </tr>
        </tfoot>
    </table>
    <img src="https://i.pinimg.com/originals/63/39/a5/6339a53166999b6a28561809cc70ef3e.gif">
    <img src="https://media.tenor.com/9HIn3UQuOYcAAAAC/athousandyearsofdeath-naruto.gif">
    
</body>

</html>