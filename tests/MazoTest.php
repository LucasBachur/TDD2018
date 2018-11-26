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

    /**
     * Es un test que prueba que se puede mezclar un mazo de cartas devolviendo un mazo distinto al original (en otro orden)
     */
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
    
    /**
     * Es un test que prueba que se puede cortar un mazo probando que el mazo original es distinto al mazo devuelto
     */
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

    /**
     * Un test que prueba que si el mazo está vacio no devuelve cartas
     */
    public function testObtenerTodasLasCartasMazovacio(){
        $mazo = new Mazo;
        $this->assertFalse($mazo->obtenerTodasLasCartas());
    }

    /**
     * Un test que prueba que si el mazo está vacio no puede cortar el mazo
     */
    public function testCortarMazoVacio(){
        $mazo = new Mazo;
        $this->assertFalse($mazo->cortar());
    }


    /**
     * Un test que prueba que la cantidad de cartas devuelta por el metodo de obtenerCantidadCartas sea correcta
     */
    public function testCantidadCartas(){
        $mazo = new Mazo;
        $this->assertEquals($mazo->obtenerCantidadCartas(), 0);
    }

    /**
     * Un test que prueba que el metodo tieneCartas devuelva la salida correcta
     */
    public function testTieneCartas(){
        $mazo = new Mazo;
        $this->assertFalse($mazo->tieneCartas());
    }
    
    /**
     * Un test que prueba que se puede agregar una carta a un mazo
     */
    public function testAgregarCarta(){
        $mazo = new Mazo;
        
        $palo = "Espada";
        $numero = "1";
    
        $carta = new Carta($palo, $numero);
        
        $this->assertTrue($mazo->agregarCarta($carta));
    }
    

    /**
     * Un test que prueba que se puede obtener la ultima carta agregada al mazo
     */
    public function testObtenerCarta(){
        $mazo = new Mazo;
        
        $palo = "Espada";
        $numero = "1";
    
        $carta = new Carta($palo, $numero);
        $mazo->agregarCarta($carta);
        
        $this->assertEquals($mazo->obtenerCarta(), $carta);
    }

    /**
     * Un test que prueba que si el mazo está vacio no devuelve la ultima carta
     */
    public function testObtenerCartaMazoVacio(){
        $mazo = new Mazo;
        $this->assertFalse($mazo->obtenerCarta());
    }

    /**
     * Un test que prueba que el tipo de mazo devuelto es el correcto
     */
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

    /**
     * Test que prueba que si tenes mazo de un tipo no te deja agregar cartas de otro tipo o no validas
     */
    public function testTipoEspecificoDeMazo(){

        $mazo = new Mazo;

        $palo = "Espada";
        $numero = "1";

        $carta = new CartaEspanola($palo, $numero);
        $this->assertTrue($mazo->agregarCarta($carta));

        $palo = "Basto";
        $numero = "1";

        $carta = new CartaEspanola($palo, $numero);
        $this->assertTrue($mazo->agregarCarta($carta));

        $palo = "Basto";
        $numero = "14";

        $carta = new CartaEspanola($palo, $numero);
        $this->assertFalse($mazo->agregarCarta($carta));

        $palo = "Corazones";
        $numero = "2";

        $carta = new CartaPoker($palo, $numero);
        $this->assertFalse($mazo->agregarCarta($carta));
    
    }
}
