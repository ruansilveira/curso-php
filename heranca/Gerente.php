<?php
require_once('Funcionario.php');

class Gerente extends Funcionario{

  public $senha;

  public function calculaBonus(){
    return parent::calculaBonus()
}


 ?>
