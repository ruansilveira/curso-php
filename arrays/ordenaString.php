<?php
// sort - (classifica em ordem crescente)
// rsort - (classifica em ordem decrescente)

$num = array("3","5","1","4","2");

/*sort($num); Ordem crescente

var_dump($num); mostra o que tem no arquivo

echo "\n"; Pula linha

rsort($num); Ordem decrescente

*/

sort($num); // Ordena em ordem o Array em ordem crescente 

for ($i=0; $i <count($num) ; $i++) {
    echo "Numero Ordenados: $num[$i]\n";
}

var_dump($num) // Mostra o que tem na variavel

 ?>
