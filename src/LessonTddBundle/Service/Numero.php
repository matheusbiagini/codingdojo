<?php

namespace LessonTddBundle\Service;

class Numero 
{
    private $numero;
    
    public function __construct($numero) {
        $numero = $this->greater10($numero);
        $this->numero = $this->onlyNumbers($numero);       
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function onlyNumbers($numero) 
    {        
        if (!is_integer($numero) && !is_float($numero)) {
            $numero = 0;
        } 
        
        return $numero;
    }       
    
    public function greater10($numero) 
    {
        if((is_integer($numero) || is_float($numero))){
            if ($numero < 10){
                throw new \InvalidArgumentException("O número não pode ser menor que 10!", 10);
            }
        }
        return $numero;
    }
}
