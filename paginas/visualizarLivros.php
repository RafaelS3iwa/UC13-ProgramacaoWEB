<?php require_once 'classes/Biblioteca.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Livros Cadastrados</title>
</head>
<body>
    <h1 class = "Texto">Livros Cadastrados</h1>
    <h4 class = "Texto">Todos os livros cadastrados no nosso sistema</h4>
    <table class = "tabela" border = "1">
        <thead>
            <th class = "tituloTabela" colspan="6">Livros</th>
            <tr> 
                <th>Título</th>
                <th>Autor</th>
                <th>Número de Páginas</th>
                <th>Ano de Publicação</th>
                <th>Preço</th>
                <th>ISBN</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaLivros as $livro) : ?>
            <tr>
                <th><?=$livro['titulo']->getTitulo()?></th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>