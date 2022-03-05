<?php
require_once __DIR__ . '/../src/Program1.php';

class Program1Test extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $program1 = new program1 (8);
        $result = $program1->modulus(2);
        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);
        $program1 = new Program1 (3);
        $result = $program1->modulus(12);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);
        $program1 = new Program1 (20);
        $result = $program1->modulus('J');
    }

    public function testModulus1()
    {
        $program1 = new Program1 (33);
        $result = $program1->modulus(10);
        $this->assertEquals(3, $result);
    }

    public function testModulus2()
    {
        $program1 = new Program1 (7);
        $result = $program1->modulus(2);
        $this->assertEquals(1, $result);
    }

}