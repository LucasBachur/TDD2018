<?php

namespace TDD;

class Mazo {

  protected $cantidad_cartas = 0;
  
  protected $cartas = array();
  
  public function mezclar() {
    if(!$this->tieneCartas()) return FALSE;
    $mis_cartas = $this->obtenerTodasLasCartas();
    if(shuffle($mis_cartas)){
      if($this->obtenerTodasLasCartas() == $mis_cartas) return $this->mezclar(); //me aseguro de que el mezclado no sea igual que la posicion original de las cartas
      $this->cartas = $mis_cartas;
      return TRUE;
    }
    return FALSE;
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
