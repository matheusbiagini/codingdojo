<?php

namespace LessonTddBundle\Service;

class Numero 
{
    private $numero;
    
    public function __construct($numero) {
        if (!is_integer($numero) && !is_float($numero)) {
            $numero = 0;
        }
        $this->numero = $numero;
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

}
