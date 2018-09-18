<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
  
  public function testExiste(){
    $palo = "Espada";
    $numero = "1";
    
    $carta = new Carta($palo, $numero);
    
    $this->assertTrue(isset($carta));
  }
  
  public function testVerPalo(){
    $palo = "Basto";
    $numero = "7";
    
    $carta = new Carta($palo, $numero);
    $this->assertEquals($this->obtenerPalo(),$palo);
  }
}

