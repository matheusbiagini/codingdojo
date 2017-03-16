<?php

namespace LessonTddBundle\Tests\Service;

use PHPUnit\Framework\TestCase;
use LessonTddBundle\Service\Contas;
use LessonTddBundle\Service\Numero;


/*
 * inicio

recebe a;

recebe b;

para i=0 ate a; i++

b = a + i * 2;

fim para

a = b / 2;

c = 3 * a + b;

se a &gt; 20

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
    
    
    
    
}
