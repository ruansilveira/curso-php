<?php
require_once('Cliente.php');

class Conta {

  public $numero;
  public $saldo;
  public $limite;
  public

}

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 550;
$conta->limite = 2000;

echo "\nNumero da conta: $conta->numero\n";
echo "Saldo na conta: $conta->saldo\n";
echo "O limite da conta é: $conta->limite\n";


 ?>
