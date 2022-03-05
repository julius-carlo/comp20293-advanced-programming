<?php
require_once __DIR__ . '/../src/Program2.php';

class Program2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $program2 = new Program2();
        $program2->setName('Julius');
        $this->assertEquals($program2->getName(), 'Julius');
    }

    public function testGetAge()
    {
        $program2 = new Program2();
        $program2->setAge(20);
        $this->assertEquals($program2->getAge(), 20);
    }

    public function testFaveColor()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Black');
        $this->assertEquals($program2->getFaveColor(), 'Black');
    }

    public function testGetNameCheckString()
    {
        $program2 = new Program2();
        $program2 ->setName('Julius');
        $this->assertIsString($program2->getName(), 'Julius');
    }

    public function testGetAgeCheckInt()
    {
        $program2 = new Program2();
        $program2->setAge(20);
        $this->assertIsInt($program2->getAge(), 20);
    }

    public function testGetAgeCheckNumeric()
    {
        $program2 = new Program2();
        $program2->setAge(20);
        $this->assertIsNumeric($program2->getAge(), 20);
    }
    
    public function testFaveColorCheckString()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Black');
        $this->assertIsString($program2->getFaveColor(), 'Black');
    }

    public function testGetTogetherInput()
    {
        $program2 = new Program2();
        $program2->setTogetherInput('Julius', 20, 'Black');
        $this->assertEquals($program2->getTogetherInput(), 'Julius', 20, 'Black');
    }
}