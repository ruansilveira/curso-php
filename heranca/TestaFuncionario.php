<?php
require_once('Gerente.php');
require_once('Secretario.php');

$gerente = new Gerente;
$gerente->nome = "João Silva";
$gerente->salario = 12000;

$secretario = new Secretario;
$secretario->nome = "Maria Helena";
$secretario->salario = 2000;
$secretario->ramal = 6241;

echo "Nome do Gerente: $gerente->nome\n";
echo "Salario do Genrente $gerente->salario\n";
echo "Senha: $gerente->senha\n";

 ?>
