<?php

namespace TDD;

class Mazo {

  protected $cantidad_cartas = 0;
  
  public function mezclar() {
    return TRUE;
  }
  
  public function cortar() {
    return TRUE;
  }
  
  public function obtenerCantidadCartas(){
    return $this->cantidad_cartas;
  }
}
