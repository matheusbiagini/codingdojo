<?php
namespace LessonTddBundle\Service;

class ProvinhaEstagiarios 
{
    private $nomeEstagiario;
    private $n1;
    private $n2;
    private $resultado;
    private $resultadoEsperado;
    
    public function __construct($nomeEstagiario, $n1, $n2, $resultadoEsperado) 
    {
        $this->nomeEstagiario = $nomeEstagiario;
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->resultadoEsperado = $resultadoEsperado;
    }
    
    public function getNome()
    {
        return $this->nomeEstagiario;
    }
    
    public function getN1()
    {
        return $this->n1;
    }
    
    public function getN2()
    {
        return $this->n2;
    }
    
    public function getResultadoEsperado()
    {
        return $this->resultadoEsperado;
    }

}
