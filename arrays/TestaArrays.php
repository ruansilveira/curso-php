<?php

$cursos = array("Lógica","Orintação a Objetos","Desenvolvimento"); // Criando ArrayAccess

//$cursos = $array = array('' => , );(10,20,30); // Array com 3 elementos. Neste caso
// Cada um ocupa posição 0,1 e2.

echo "$cursos[0]\n";

echo "$cursos[2]\n";

echo count($cursos) . PHP_EOL; // COUNT DEVOLVE A QNT DE ELEMENTOS.

for ($i=0; $i < count($cursos); $i++) {
  echo "Curso: $cursos[$i]" .PHP_EOL;

  echo "----foreach----" . PHP_EOL;
    foreach ($cursos as $cursos) {
      echo "$cursos" . PHP_EOL;
      //foreach server apenas para leitura. Não inicia array nem atribui valos
    
    }
}

 /*$cursos =array("Python","Ruby","Matematica","Teste em Java");

 $cursos[] = "Curso de Programação com Java";
 $cursos[] = "HTML, CSS JS";

 var_dump($cursos);

 //for ($i=0; $i < count($cursos); $i++) {
   //echo "Cursos na posição $i: $cursos[$i]\n";

   foreach ($cursos as $x => $valor) {
     echo "Chave $x, Valor $valor";
   }

 //var_dump($cursos);
 //array_push($curso,"HTML, CSS E JS"); - Outra forma.
*/
?>
