<?php

//PASSAR OS PARAMETROS NO TERMINAL.

$soma = 0;

for ($i=0; $i <count($argv) ; $i++) {
  $soma += $argv[$i];
  }
echo "A média é = ". ($soma/(count($argv)-1))."\n";
 ?>
