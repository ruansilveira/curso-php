<?php
require_once('Conta.php');

echo "Contador: ".Conta::$contador . PHP_EOL;
// .Conta::$contador é para chamar o $contador da classe Conta.php.

$conta = new Conta;
$conta->numero = "11";
$conta->saldo = "600";

$conta2 = new Conta;
$conta->numero = "12";
$conta->saldo = "130";

echo "Contador final:".Conta::$contador . PHP_EOL;

Conta::zeraContador();

echo "Contador após zera contador: " . Conta::$contador . PHP_EOL;



 ?>
