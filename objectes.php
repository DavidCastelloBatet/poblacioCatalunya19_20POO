<?php

class MySqlDriver {

  public $servidor;
  public $usuari;
  public $clau;
  public $baseDeDades;
  public $missatge = 'Hola desde la instancia de MySqlDriver, metode saludar';

  function __construct($servidor, $usuari, $clau, $baseDeDades){
    $this-> servidor = $servidor;
    $this-> usuari = $usuari;
    $this-> clau = $clau;
    $this-> baseDeDades = $baseDeDades;
  }

  public function saludar() {
    echo '<br>' . $this->missatge;
  }

  public function getBaseDeDades(){
    return  '<br>' . $this->baseDeDades;
  }
}

class MySqlDriverPHP8 {

  public function __construct(
    public $servidor, 
    public $usuari, 
    public $clau, 
    public $baseDeDades,
    public $missatge = 'Hola desde la instancia de MySqlDriverPHP8, metode saludar'
  ){}

  public function saludar() {
    echo '<br>' . $this->missatge;
  }
  

  public function getBaseDeDades(){
    return  '<br>' . $this->baseDeDades;
  }
}