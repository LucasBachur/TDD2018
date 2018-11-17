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
        
        $this->assertTrue($mazo->agregarCarta($carta1));
        $palo = "Basto";
        $numero = "3";
    
        $carta2 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta2));
        $palo = "Oro";
        $numero = "7";
    
        $carta3 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta3));
        $palo = "Espada";
        $numero = "8";
    
        $carta4 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta4));

        $array_cartas = array($carta1, $carta2, $carta3, $carta4);

        $array_cartas_mazo = $mazo->obtenerTodasLasCartas();

        $this->assertEquals($array_cartas,$array_cartas_mazo);
        $this->assertTrue($mazo->mezclar());
        $array_cartas_mazo = $mazo->obtenerTodasLasCartas();
        $this->assertNotEquals($array_cartas,$array_cartas_mazo); //deberían ser distintas ya que las mezclé
    }
    
    public function testCortar(){
        $mazo = new Mazo; //Creo mazo

        $palo = "Espada";
        $numero = "1";
    
        $carta1 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta1));
        $palo = "Basto";
        $numero = "3";
    
        $carta2 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta2));
        $palo = "Oro";
        $numero = "7";
    
        $carta3 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta3));
        $palo = "Espada";
        $numero = "8";
    
        $carta4 = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta4));

        $palo = "Copa";
        $numero = "12";

        $carta5 = new Carta($palo, $numero);

        $this->assertTrue($mazo->agregarCarta($carta5));

        $array_cartas = array($carta1, $carta2, $carta3, $carta4, $carta5);

        $mis_cartas = $mazo->obtenerTodasLasCartas();

        $this->assertEquals($array_cartas, $mis_cartas);

        $this->assertTrue($mazo->cortar());

        $mis_cartas = $mazo->obtenerTodasLasCartas();

        $this->assertNotEquals($array_cartas, $mis_cartas); //deberían ser distintas ya que corté el mazo
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
    public function testTipoDeMazo(){
        $mazo = new Mazo;

        $this->assertEquals($mazo->obtenerTipo(), NULL);

        $palo = "Espada";
        $numero = "1";
    
        $carta = new CartaEspanola($palo, $numero);

        $mazo->agregarCarta($carta);
        $tipo = get_class($carta);

        $this->assertEquals($mazo->obtenerTipo(),$tipo);
    }
}
