<?php
require_once('Gerente.php');
require_once('Secretario.php');

$secretario = new Secretario;
$secretario->nome = "Maria Helena";
$secretario->salario = 2000;
$secretario->ramal = 6241;

echo "Nome do Gerente: $gerente->nome\n";
echo "Salario do Genrente $gerente->salario\n";
echo "Senha: $gerente->senha\n";

echo "Bonus do Gerente: $bonus\n";
 ?>
