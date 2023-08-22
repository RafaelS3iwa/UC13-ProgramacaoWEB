<?php
    if(isset($_POST['cep']) && !empty($_POST['cep'])){
        
        $cep = $_POST['cep']; 
        $resultado = file_get_contents("https://viacep.com.br/ws/$cep/json/");
        
        $dadosEndereco = json_decode($resultado, true); #o true vai converter pra array, sem o true o bagulho vai ser convertido para objeto 

        //var_dump($dadosEndereco); 
    }else{

        header("location:buscar-endereco.php");
        exit; 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .vai{
            color: black;
        }
    </style>
</head>
<body>
    <div class="vai"> 
    <h1>Endereço</h1>
    <hr>
    <p>CEP: <?=$dadosEndereco['cep'] ?></p>
    <p>Logradouro: <?=$dadosEndereco['logradouro'] ?> </p>
    <p>Bairro:<?=$dadosEndereco['bairro'] ?></p>
    <p>Cidade: <?=$dadosEndereco['localidade'] ?></p>
    <p>Estado: <?=$dadosEndereco['uf'] ?></p>
    </div>
</body>

</html>