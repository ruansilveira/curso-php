<?php

class Cartao {
  public $numero;
  public $dataDeVal;
}

$cartao = new Cartao;
$cartao->numero="1234.5678.9012.3456";
$cartao->dataDeVal="08/2022";

$cartao2 = new Cartao;
$cartao2->numero="7894.5612.3021.6541";
$cartao2->dataDeVal="02/2025";

echo"Numero do cartao: $cartao->numero\n";
echo"Validade do cartao: $cartao->dataDeVal\n";

echo "O numero de cartão: $cartao2->numero tem validade até $cartao2->dataDeVal\n";

class Agencia {
  public $numero;
  }
  $agencia = new Agencia;
  $agencia->numero = "2004-4\n";

  $agencia2 = new Agencia;
  $agencia2->numero="3011-2\n";

 ?>
