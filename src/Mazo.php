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
    if($this->cartas[] = $carta) {
      $this->cantidad_cartas++;
      return TRUE;
    }
    return FALSE;
  }
  
  public function obtenerCarta(){
    if($this->tieneCartas()){
      return $this->cartas[0];
    }
    return FALSE;
  }

  public function obtenerTodasLasCartas(){
    if($this->tieneCartas()) return $this->cartas;
    return FALSE;
  }
}
