<?php

class Aluno{
  public $nome;
  public $rg;
  public $dataNasc;
}

$aluno = new Aluno;
$aluno->nome="Carlos Eduardo";
$aluno->rg="58.214.654-8";
$aluno->dataNasc="21/04/1990";

$aluno2 = new Aluno;
$aluno2->nome="Andre Marques";
$aluno2->rg="89.321.671-3";
$aluno2->dataNasc="12/10/1994";

echo"\nO aluno: $aluno->nome possui RG, $aluno->rg e nasceu em, $aluno->dataNasc.\n";

echo"\nO aluno: $aluno2->nome possui RG, $aluno2->rg e nasceu em $aluno->dataNasc.\n";

 ?>
