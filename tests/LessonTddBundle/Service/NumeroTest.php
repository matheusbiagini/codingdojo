<?php

namespace LessonDesignPatternsBundle\Tests\Service;

use PHPUnit\Framework\TestCase;
use LessonTddBundle\Service\Numero;
use DateTime;

class NumeroTest extends TestCase
{
    public function testInstanceOf()
    {
        $instance = new Numero(null);
        
        $this->assertInstanceOf('LessonTddBundle\Service\Numero', $instance);
    }
    
    public function testGetter() 
    {
        $instance = new Numero(99);
        
        $this->assertEquals(99, $instance->getNumero());
        
    }
    
    public function testNotNull()
    {
        $instance = new Numero(null);
        
        $this->assertEmpty(!empty($instance->getNumero()));
    }
    
    /**
     * @dataProvider providerGet
     */
    public function testProviderGetter($expected, $actual)
    {
        $this->assertEquals($expected, $actual);
    }
    
    public function testIsTrue()
    {
        $test = 90;
        
        $instance = new Numero($test);
        
        $this->assertTrue($test == $instance->getNumero());
    }
    
    /**
     * @dataProvider providerNotNumeric
     */
    public function testEqualZero($actual)
    {
        $instace = new Numero($actual);
        
        $this->assertEquals(0, $actual);
    }
    
    public function testIsFalse()
    {
        $instance = new Numero(20);
        
        $this->assertFalse(!is_numeric($instance->getNumero()));
    }
    
    public function testTypeOf()
    {
        $instance = new Numero(20);
        
        $this->assertInternalType('integer', $instance->getNumero());
    }
    
    public function providerNotNumeric()
    {
        return [
            [0],
            [false],
            [null]
        ];
    }
    
    public function providerGet() 
    {
        return [
            [0,0],
            [1,1],
            [99,99],
            [null, null],
            [70,70]
        ];
    }
}
