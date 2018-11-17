<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {
  
  public function testEsValido(){
    $palo = "Basto";
    $numero = "7";
    
    $carta = new Carta($palo, $numero);
    $this->assertTrue($carta->esValido());

    $palo = "Basto";
    $numero = "7";
    
    $carta = new CartaEspanola($palo, $numero);
    $this->assertTrue($carta->esValido());

    $palo = "Basto";
    $numero = "14";
    
    $carta = new CartaEspanola($palo, $numero);
    $this->assertFalse($carta->esValido());

    $palo = "Corazones";
    $numero = "2";
    
    $carta = new CartaPoker($palo, $numero);
    $this->assertTrue($carta->esValido());

    $palo = "Basto";
    $numero = "2";
    
    $carta = new CartaPoker($palo, $numero);
    $this->assertFalse($carta->esValido());
  }
}

