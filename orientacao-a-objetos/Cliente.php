<?php
class Cliente{
  public $nome;
  public $codigo;
  public $dono;

  }
$cliente1 =  new Cliente;
$cliente2 = new Cliente;

$cliente1->nome="Aberlardo Campos.";
$cliente1->codigo="01";

$cliente2->nome="Bruno Lopes ";
$cliente2->codigo="02";

echo "Nome do cliente1: $cliente1->nome\n";
echo "Codigo do cliente1: $cliente1->codigo\n";

echo "Nome do cliente2: $cliente2->nome\n";
echo "Codigo do cliente2: $cliente2->codigo\n";
