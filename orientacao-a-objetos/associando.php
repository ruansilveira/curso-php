<?php

spl_autoload_register();

class Conta {

  public $numero;
  public $saldo;
  public $limite;
  public $dono;

}
$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 550;
$conta->limite = 2000;

echo "\nNumero da conta: $conta->numero\n";
echo "Saldo na conta: $conta->saldo\n";
echo "O limite da conta é: $conta->limite\n";

class Cliente{
  public $nome;
  public $codigo;

  }

$cliente1 =  new Cliente;
$cliente1->nome="Abelardo Campos.";
$cliente1->codigo="01";
echo "\nNome do cliente1: $cliente1->nome\n";
echo "Codigo do cliente1: $cliente1->codigo";

$conta->dono = $cliente1;
echo "Nome{$conta->dono->nome}\n";
echo "Codigo{$conta->dono->codigo}\n";

//$cliente2 = new Cliente;
//$cliente2->nome="Bruno Lopes ";
//$cliente2->codigo="02";
//echo "Nome do cliente2: $cliente2->nome\n";
//echo "Codigo do cliente2: $cliente2->codigo\n";


 ?>
