<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
  /**
   * Test que prueba que existe la carta
   */
  public function testExiste(){
    $palo = "Espada";
    $numero = "1";
    
    $carta = new Carta($palo, $numero);
    
    $this->assertTrue(isset($carta));
  }
  
  /**
   * Test que prueba que el palo de la carta devuelto por el metodo obtenerPalo sea correcto
   */
  public function testVerPalo(){
    $palo = "Basto";
    $numero = "7";
    
    $carta = new Carta($palo, $numero);
    $this->assertEquals($carta->obtenerPalo(),$palo);
  }

  /**
   * Test que prueba que el numero de la carta devuelto por el metodo obtenerNumero sea correcto
   */
  public function testVerNumero(){
    $palo = "Basto";
    $numero = "7";
    
    $carta = new Carta($palo, $numero);
    $this->assertEquals($carta->obtenerNumero(),$numero);
  }
}

