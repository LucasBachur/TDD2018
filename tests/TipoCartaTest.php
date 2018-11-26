<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class TipoCartaTest extends TestCase {
  /**
   * Test que prueba el correcto funcionamiento del metodo que comprueba la validez de la carta
   */
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

