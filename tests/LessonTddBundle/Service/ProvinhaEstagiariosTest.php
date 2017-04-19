<?php

namespace LessonDesignPatternsBundle\Tests\Service;

use PHPUnit\Framework\TestCase;
use LessonTddBundle\Service\ProvinhaEstagiarios;

class ProvinhaEstagiariosTest extends TestCase
{
    public function testNomeDoEstagiario()
    {
        $provinhaEstagiarios = new ProvinhaEstagiarios('Lucas Frezarini', 10, 10, 3912);
        
        $this->assertEquals('Lucas Frezarini', $provinhaEstagiarios->getNome()) ;
    }
    
    public function testResultadoLucas()
    {
        $provinha = new ProvinhaEstagiarios('Lucas', 10, 10, 39022);
        
        $resultadoEsperado = $provinha->getResultadoEsperado();
        
        $contas = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $contas->method('getResultado')
                ->will($this->returnValue(39022));
                
        $this->assertEquals($provinha->getResultadoEsperado(), $contas->getResultado());        
    }
    
    public function testResultadoIsa()
    {
        $provinha = new ProvinhaEstagiarios('Isa', 10, 10, 100000000000);
        
        $resultadoEsperado = $provinha->getResultadoEsperado();
        
        $contas = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $contas->method('getResultado')
                ->willReturn(100000000000);
                
        $this->assertEquals($provinha->getResultadoEsperado(), $contas->getResultado());        
    }
    
    public function testResultadoRodrigo()
    {
        $provinha = new ProvinhaEstagiarios('Rodrigo', 10, 10, 100000000000);
        
        $resultadoEsperado = $provinha->getResultadoEsperado();
        
        $contas = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $contas->method('getResultado')
                ->will($this->returnArgument(0));
                
        $this->assertEquals(666, $contas->getResultado(666));        
    }
    
    public function testResultadoPesadao()
    {
        $provinha = new ProvinhaEstagiarios('Matetinha', 14.90, 14.90, 100000000000);
        
        $contas = new \LessonTddBundle\Service\Numero(21);
        
        $pesadao = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $pesadao->method('getResultado')
                ->will($this->returnSelf());
                
        $this->assertEquals($pesadao, $pesadao->getResultado());        
    }
    
    public function testResultadoEnrico()
    {
        $provinha = new ProvinhaEstagiarios('Enrico', 14.90, 14.90, 100000000000);
        
        $contas = new \LessonTddBundle\Service\Numero(21);
        
        $pesadao = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $pesadao->method('getResultado')
                ->will($this->returnCallback(function($valor){
                    return $valor + 2;
                }));
                
        $this->assertEquals(12, $pesadao->getResultado(10)); 
    }
            
}
