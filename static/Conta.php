<?php
// Fazer o contador contar quantas instancias de Conta terem
//na memória;

class Conta{

public $numero; // Atributo do objeto
public $saldo;  // Atributo do objeto
public static $contador = 0; // Atributo da classe

// STATIC - É O MESMO QUE DA CLASSE.

public function __construct(){
  self::$contador++; // Para os objetos terem acessos ao atributo.
}
    public static function zeraContador(){

    self::$contador = 0;
    //Envia email;
    //Zera o contador;
  }
 $numConta = new Conta
}

 ?>
