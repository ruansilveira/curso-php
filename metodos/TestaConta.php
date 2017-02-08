<?php

require_once 'Conta.php';

$conta = new Conta(1);
$conta-> numero = 13;

$conta->deposita(1000);

echo "Saldo: $conta->saldo\n";

$resultado = $conta->saca(100);

if ($resultado) {
echo "Saque efetuado com sucesso! \n ";}

else {
  echo "Saldo insuficiente\n";
}
  $conta->imprimeExtrato();

?>
