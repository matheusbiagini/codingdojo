<?php
namespace LessonTddBundle\Service;

use LessonTddBundle\Service\Contas;

class ProvinhaEstagiarios 
{
    private $nomeEstagiario;
    private $contas;
    private $resultado;
    private $resultadoEsperado;
    
    public function __construct($nomeEstagiario, Contas $contas, $resultadoEsperado) 
    {
        $this->nomeEstagiario = $nomeEstagiario;
        $this->contas = $contas;
        $this->resultadoEsperado = $resultadoEsperado;
    }
    
    public function getNome()
    {
        return $this->nomeEstagiario;
    }
    
    public function getResultadoEsperado()
    {
        return $this->resultadoEsperado;
    }
    
    public function getResultado()
    {
        return $this->resultado;
    }
    
    public function avaliar()
    {
        $this->resultado = $this->contas->getResultado();
        return ($this->getResultado() == $this->getResultadoEsperado());
    }

}
