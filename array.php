<?php
$listaCompra = ["Arroz", "Feijão", "Ovo", "Picanha"]; //posso declarar também com $listaCompra = array();  

echo "<h4><b>Ajuda para o desenvolvidor<br></b></h4>";
print_r($listaCompra); //no HTML fica: Array ( [0] => Arroz [1] => Feijão [2] => Ovo [3] => Picanha ) 
echo "<br>";

var_dump($listaCompra); //array(4) { [0]=> string(5) "Arroz" [1]=> string(7) "Feijão" [2]=> string(3) "Ovo" [3]=> string(7) "Picanha" }

/////////////////////////////////////
echo "<hr>";
echo "<h4><b>Imprimindo um valor específico dentro do array<br></b></h4>";
echo $listaCompra[2]; //imprime o valor de uma posição dentro do array  

/////////////////////////////////////
echo "<hr>";
echo "<h4><b>Imprimindo todos os itens dentro do array<br></b></h4>";
foreach ($listaCompra as $item) { //imprime todos os itens dentro do array 
    echo $item . " - ";
}

/////////////////////////////////////
echo "<hr>";
echo "<h4><b>Imprimindo o índice e o valor<br></b></h4>";

$listaCompra[] = "Oleo";

foreach ($listaCompra as $indice => $item) { //nesse caso imprime o índice e o valor 
    echo $indice . "- " . $item . ", ";
}
