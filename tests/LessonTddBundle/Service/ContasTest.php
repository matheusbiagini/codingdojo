<?php

namespace LessonTddBundle\Tests\Service;

use PHPUnit\Framework\TestCase;
use LessonTddBundle\Service\Contas;
use LessonTddBundle\Service\Numero;


/*
 * Formula da conta:

recebe a;

recebe b;

para i=0 ate a; i++

b = a + i * 2;

fim para

a = b / 2;

c = 3 * a + b;

se a > 20

resultado = a + b;

senão

resultado = b - 2;

fim se
 */

class ContasTest extends TestCase 
{
    public function testInstanceOf()
    {
        $instance = new Contas(new Numero(10), new Numero(20));
        $this->assertInstanceOf('LessonTddBundle\Service\Contas', $instance);
    }
    
    
    public function testTwoNumbers() 
    {
        $n1 = new Numero(10);
        $n2 = new Numero(20);
        $instance = new Contas($n1, $n2);
        
        $this->assertEquals(10, $instance->getN1()->getNumero());
        $this->assertEquals(20, $instance->getN2()->getNumero());
    } 
    
    public function testContaB() 
    {
        $instance = new Contas(new Numero(10), new Numero(10));
        
        $this->assertEquals(30, $instance->contaB()->getB());
    }
    
    public function testContemContaB()
    {
        $instance = new Contas(new Numero(10), new Numero(10));
        
        $this->assertContains($instance->contaB()->getB(), [20, 30, 50]);
    }
    
    public function testArrayLengthContaA() 
    {
        $instance = new Contas(new Numero(10), new Numero(10));        
        
        $this->assertCount(1, [$instance->contaB()->contaA()->getA()]);
    }
    
    /**
     * @dataProvider providerContaA
     */
    public function testArrayLengthContaAEmMassa($expected, $actual)
    {
        $this->assertCount($expected, [$actual]);
    }
    
    public function providerContaA() 
    {
        $instance1 = new Contas(new Numero(10), new Numero(10));
        $instance2 = new Contas(new Numero(100), new Numero(100));
        $instance3 = new Contas(new Numero(1000), new Numero(1000));
       
        return [
           array (1, $instance1->contaB()->contaA()->getA()),
           array (1, $instance2->contaB()->contaA()->getA()),
           array (1, $instance3->contaB()->contaA()->getA()),
       ];        
    }
    
    public function testGetterContaA() 
    {
        $instance = new Contas(new Numero(10), new Numero(10));        
        
        $this->assertEquals(15, $instance->contaB()->contaA()->getA());        
    }  

    public function testArrayHasKeyContaA() 
    {
        $instance = new Contas(new Numero(10), new Numero(10));        
        
        $this->assertArrayHasKey('contaA', ['contaA' => $instance->contaB()->contaA()->getA()]);        
    }  
    
    public function testRegexContaA()
    {
        $instance = new Contas(new Numero(10), new Numero(10));  
        
        $this->assertRegExp("/\d{2}/", (string) $instance->contaB()->contaA()->getA());
    }
    
    public function testContaCaso1()
    {
        $instance = new Contas(new Numero(10), new Numero(10));
        
        $resultado = $instance->getResultado();
        
        $this->assertEquals(28, $resultado);
    }

    public function testContaCaso2()
    {
        $instance = new Contas(new Numero(1000), new Numero(1000));
        
        $resultado = $instance->getResultado();
        
        $this->assertEquals(4500, $resultado);
    }
    
}
