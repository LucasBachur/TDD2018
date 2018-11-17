<?php

namespace TDD;

class CartaPoker extends Carta{

    public function esValido(){
        if(in_array($this->palo,array("Corazones","Picas","Rombos","Treboles")) && in_array($this->numero,array("A","2","3","4","5","6","7","8","9","10","J","K","Q")))
            return TRUE;
        return FALSE;
    }

}
