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
        $palo = "Espada";
        $numero = "1";
    
        $carta1 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta));
        $palo = "Basto";
        $numero = "3";
    
        $carta2 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta));
        $palo = "Oro";
        $numero = "7";
    
        $carta3 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta));
        $palo = "Espada";
        $numero = "8";
    
        $carta4 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta));

        $array_cartas = array($carta1, $carta2, $carta3, $carta4);

        $array_cartas_mazo = $mazo->obtenerTodasLasCartas();

        $this->assertTrue($array_cartas,$array_cartas_mazo);
        $this->assertTrue($mazo->mezclar());
        $array_cartas_mazo = $mazo->obtenerTodasLasCartas();
        $this->assertFalse($array_cartas,$array_cartas_mazo); //deberían ser distintas ya que las mezclé
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
    
    public function testObtenerCarta(){
        $mazo = new Mazo;
        
        $palo = "Espada";
        $numero = "1";
    
        $carta = new Carta($palo, $numero);
        $mazo->agregarCarta($carta);
        
        $this->assertEquals($mazo->obtenerCarta(), $carta);
    }
}
