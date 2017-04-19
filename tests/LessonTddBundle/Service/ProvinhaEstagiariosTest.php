<?php

namespace LessonDesignPatternsBundle\Tests\Service;

use PHPUnit\Framework\TestCase;
use LessonTddBundle\Service\ProvinhaEstagiarios;
use LessonTddBundle\Service\Contas;
use LessonTddBundle\Service\Numero;

class ProvinhaEstagiariosTest extends TestCase
{
    public function testGetterNomeDoEstagiario()
    {
        $conta = new Contas(new Numero(10), new Numero(10));
        $provinhaEstagiarios = new ProvinhaEstagiarios('Lucas Frezarini', $conta, 3912);
        $this->assertEquals('Lucas Frezarini', $provinhaEstagiarios->getNome()) ;
    }
    
    public function testGettersMethodsResultado()
    {
        $conta = new Contas(new Numero(10), new Numero(10));
        $provinha = new ProvinhaEstagiarios('Alison', $conta, 28);
        $provinha->avaliar();
        
        $this->assertEquals(28, $provinha->getResultado());
        $this->assertEquals(28, $provinha->getResultadoEsperado());
    }
    
    public function testMockReturnValue()
    {
        $conta = new Contas(new Numero(10), new Numero(10));
        $provinha = new ProvinhaEstagiarios('Lucas', $conta, 39022);
        
        $contas = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $contas->method('getResultado')
                ->will($this->returnValue(39022));
                
        $this->assertEquals($provinha->getResultadoEsperado(), $contas->getResultado());        
    }
    
    public function testMockWillReturn()
    {
        $conta = new Contas(new Numero(10), new Numero(10));
        $provinha = new ProvinhaEstagiarios('Isa', $conta, 100000000000);
        
        $resultadoEsperado = $provinha->getResultadoEsperado();
        
        $contas = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $contas->method('getResultado')
                ->willReturn(100000000000);
                
        $this->assertEquals($provinha->getResultadoEsperado(), $contas->getResultado());        
    }
    
    public function testMockReturnArgument()
    {
        $conta = new Contas(new Numero(10), new Numero(10));
        $provinha = new ProvinhaEstagiarios('Rodrigo', $conta, 100000000000);
        
        $contas = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $contas->method('getResultado')
                ->will($this->returnArgument(0));
                
        $this->assertEquals(666, $contas->getResultado(666));        
    }
    
    public function testMockReturnSelf()
    {
        $pesadao = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $pesadao->method('getResultado')
                ->will($this->returnSelf());
                
        $this->assertEquals($pesadao, $pesadao->getResultado());        
    }
    
    public function testMockReturnCallback()
    {
        $pesadao = $this->getMockBuilder('LessonTddBundle\Service\Contas')
                ->disableOriginalConstructor()
                ->getMock();
        
        $pesadao->method('getResultado')
                ->will($this->returnCallback(function($valor){
                    return $valor + 2;
                }));
                
        $this->assertEquals(12, $pesadao->getResultado(10)); 
    }
    
    public function testResultadoEstagiagioAprovado()
    {
        $conta = new Contas(new Numero(10), new Numero(10));
        $provinha = new ProvinhaEstagiarios('Gabriel', $conta, 28);
        $this->assertTrue($provinha->avaliar());
    }
    
    public function testResultadoEstagiagioReprovado()
    {
        $conta = new Contas(new Numero(1920), new Numero(10));
        $provinha = new ProvinhaEstagiarios('Gabriel', $conta, 28);
        $this->assertFalse($provinha->avaliar());
    }
}
