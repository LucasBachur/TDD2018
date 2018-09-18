<?php

namespace TDD;

class Mazo {

  protected $cantidad_cartas = 0;
  
  protected $cartas = array();
  
  public function mezclar() {
    return TRUE;
  }
  
  public function cortar() {
    return TRUE;
  }
  
  public function obtenerCantidadCartas(){
    return $this->cantidad_cartas;
  }
  
  public function tieneCartas(){
    if($this->obtenerCantidadCartas() == 0) return FALSE;
    return TRUE;
  }
  
  public function agregarCarta($carta){
    if($this->cartas[] = $carta) return TRUE;
    return FALSE;
  }
}
