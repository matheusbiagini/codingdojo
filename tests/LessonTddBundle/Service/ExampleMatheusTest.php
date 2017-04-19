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
    
    public function testAssertContains()
    {
        $this->assertContains(2, array(1, 2, 3));
    }
    
    public function testAssertCount()
    {
        $this->assertCount(2, array('1', '2'));
    }
    
    public function testAssertArrayHasKey()
    {
        $this->assertArrayHasKey('foo', array('foo' => 'bar'));
    }
    
    public function testAssertRegex()
    {
        $this->assertRegExp('/foo/', 'foo');
    }
    
    public function testStubReturnValue()
    {
        $matheus = $this->getMockBuilder('LessonTddBundle\Service\ClasseDoMatheus')
                ->disableOriginalConstructor()
                ->getMock();
        
        $matheus->method('voceSabeMeuNome')
                ->will($this->returnValue('Matheus'));
        
        $this->assertEquals('Matheus', $matheus->voceSabeMeuNome());
    }
    
    public function testStubWillReturn()
    {
        // Cria um esboço para a classe ClasseDoMatheus.
        $matheus = $this->getMockBuilder('LessonTddBundle\Service\ClasseDoMatheus')
              ->disableOriginalConstructor()
              ->getMock();
        
        // Configura o esboço do metodo voceSabeMeuNome para return matheus
        $matheus->method('voceSabeMeuNome')
             ->willReturn('Matheus');
        
        $this->assertEquals('Matheus', $matheus->voceSabeMeuNome());
    }
    
    public function testReturnArgumentStub()
    {
        // Cria um esboço para a classe ClasseDoMatheus.
        $stub = $this->getMockBuilder('LessonTddBundle\Service\ClasseDoMatheus')
                     ->getMock();

        // Configura o esboço.
        $stub->method('voceSabeMeuNome')
             ->will($this->returnArgument(0));

        // $stub->voceSabeMeuNome('Matheus') retorna 'Matheus'.
        $this->assertEquals('Matheus', $stub->voceSabeMeuNome('Matheus'));

        // $stub->voceSabeMeuNome('Alice') retorna 'Alice'.
        $this->assertEquals('Alice', $stub->voceSabeMeuNome('Alice'));
    }
    
    public function testReturnSelf()
    {
        // Cria um esboço para a classe ClasseDoMatheus.
        $stub = $this->getMockBuilder('LessonTddBundle\Service\ClasseDoMatheus')
                     ->getMock();

        // Configura o esboço.
        $stub->method('voceSabeMeuNome')
             ->will($this->returnSelf());

        // $stub->voceSabeMeuNome() retorna $stub
        $this->assertEquals($stub, $stub->voceSabeMeuNome());
    }
    
    public function testReturnCallbackStub()
    {
        // Cria um esboço para a classe ClasseDoMatheus.
        $stub = $this->getMockBuilder('LessonTddBundle\Service\ClasseDoMatheus')
                     ->getMock();

        // Configura o esboço.
        $stub->method('voceSabeMeuNome')
             ->will($this->returnCallback('strlen'));

        // $stub->voceSabeMeuNome($argument) retorna strlen($argument)
        $this->assertEquals(7, $stub->voceSabeMeuNome('Matheus'));
    }
    
}