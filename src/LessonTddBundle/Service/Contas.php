<?php

namespace LessonTddBundle\Service;
use LessonTddBundle\Service\Numero;

class Contas
{
    private $n1;
    private $n2;
    private $b;
    
    public function __construct(Numero $n1,Numero $n2) {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }
    
    public function getN1()
    {
        return $this->n1;
    }
    
    public function getN2()
    {
        return $this->n2;
    }
    
    public function contaB()
    {
        for ($i=0 ; $i <= $this->getN1()->getNumero(); $i++) {
            $b = $this->getN1()->getNumero() + $i * 2;
        }
        
        $this->b = $b;
        
        return $this;
    }
    
    public function getB()
    {
        return $this->b;
    }
}
