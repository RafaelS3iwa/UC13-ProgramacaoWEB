<html> 
    <head> 
        <title>Aula de PHP</title>
    </head>
    <body> 
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi blanditiis repellat quae, voluptas suscipit quisquam, minus eos ab omnis voluptate delectus iure fugiat expedita! Quos quae voluptates reiciendis minus suscipit!</p>

        <?php
            echo "Rafael Inoue";
        ?>
       
       <br>
       
       <?php
            print "É o maior fodaum";
        ?>

        <br> 
        <!-- Comentário em HTML -->
        
        <?php
        //Comentário em PHP  
        /*Comentário 
        em
        Bloco*/
        
        $nomeCompleto = "Rafael Inoue"; 
        $idade = 21;
        $status = true;
        $salario = 2550.50; //Para Decimal usa ponto           
        
        echo $nomeCompleto." ".$idade; //Para por espaço é ." ". 
        echo '<br>';
        echo "$nomeCompleto $idade anos. <br>";    
        echo '$nomeCompleto $idade anos. <br>'; //Quando não houver variável, optar por aspas simples

        $logoSenac = "https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";
        $naruto = "https://i.kym-cdn.com/entries/icons/facebook/000/007/270/MYPEIN.jpg";

        ?>

        <img src="<?php echo $logoSenac ?>" alt="Senac Marília">  
        <img src="<?=$naruto ?>" alt="Clica aí só de meme">   
        <!-- O short echo é o de cima, mas ele só funciona com uma única variável -->

    </body>
</html>