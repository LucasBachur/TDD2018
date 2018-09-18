<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }
    
    public function testCortar(){
        $mazo = new Mazo; //Creo mazo
        $this->assertTrue($mazo->cortar());
    }

    public function testCantidadCartas(){
        $mazo = new Mazo;
        $this->assertEquals($mazo->obtenerCantidadCartas(), 0);
    }
    
    public function testTieneCartas(){
        $mazo = new Mazo;
        $this->assertFalse($mazo->tieneCartas());
    }
    
    public function testAgregarCarta(){
        $mazo = new Mazo;
        
        $palo = "Espada";
        $numero = "1";
    
        $carta = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta));
    }
}
