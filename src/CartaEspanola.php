<?php

namespace TDD;

class CartaEspanola extends Carta {

    public function esValido() {
        if (in_array($this->palo, array ("Basto", "Espada", "Oro", "Copa")) && in_array($this->numero, array ("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12")))
            return TRUE;
        return FALSE;
    }
}
