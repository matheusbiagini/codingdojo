<?php

namespace LessonDesignPatternsBundle\Tests\Service;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use Exception;

class ExampleMatheusTest extends TestCase 
{
    public $stack = array();
    
    public function setUp() 
    {
        $this->stack = array('Um', 'Dois');
    }
    
    public function testEmpty()
    {
        $this->stack = [];
        $this->assertTrue(empty($this->stack));
        $this->stack = array('Um', 'Dois');
    }
    
    public function testExample()
    {
        $this->assertEmpty(null);
    }
    
    public function testEmpty2()
    {
        $this->assertFalse(empty($this->stack));
    }
    
    public function testExample2()
    {
        $result = 30;
        $this->assertEquals(30, $result);
    }
    
    /**
    * @dataProvider additionProvider
    */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }
    
    public function additionProvider()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 2)
        );
    }
    
    /**
    * @expectedException InvalidArgumentException
    */
    public function testException()
    {
        throw new InvalidArgumentException('Some Message', 10);
    }
    
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'bar';
    }
    
    public function testPularTeste()
    {
        if (!extension_loaded('mysqli')) {
            $this->markTestSkipped(
            'The MySQLi extension is not available.'
            );
        }
    }
    
    public function testInstanceOf()
    {
        $this->assertInstanceOf('Exception', new Exception);
    }
    
    /*
    public function testStub()
    {
        $stuntDouble = $this->getMockBuilder('ClasseDoMatheus')
              ->disableOriginalConstructor()
              ->getMock();
        
        $stuntDouble->method('voceSabeMeuNome')
             ->willReturn('Matheus');
        
        $this->assertEquals('Matheus', $stuntDouble->voceSabeMeuNome());
    }*/
    
    public function testAssertGreaterThanOrEqual()
    {
        $this->assertGreaterThanOrEqual(2, 2);
    }
    
    public function testAssertLessThanOrEqual()
    {
        $this->assertLessThanOrEqual(2,1);
    }
    
    public function testAssertInternalType()
    {
        $this->assertInternalType('string', 'matheus');
    }
}