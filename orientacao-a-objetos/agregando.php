<?php

require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';

$cliente = new Cliente;
$cliente->nome = "Hannibal";
$cliente->codigo = 17;

$cartao = new Cartao;
$cartao->numero = 4444;
$cartao->dataDeValidade = "12/11/2020";

$cartao->dono = $cliente;

echo "Número do cartao: $cartao->numero" . PHP_EOL;
echo "Data de validade: $cartao->dataDeValidade" . PHP_EOL;
echo "Nome do dono: {$cartao->dono->nome}" . PHP_EOL;

/*
require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';

$cliente = new Cliente;
$cliente->nome="Raimundo da SIlva";
$cliente->codigo="32";

$cartao = new Cartao;
$cartao->numero="1234.5678.9012.3456";
$cartao->dataDeVal="05/02/2021";

$cliente->dono = $cartao;

echo "O cliente: $cliente->nome tem o numero do cartão: $cartao->numero
e a data de validade $cartao->dataDeVal";*/
?>
