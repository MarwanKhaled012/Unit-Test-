<?php
use PHPUnit\Framework\TestCase;

// Include class to use it
require_once './src/factorial.php'; 

// Create Class  FactorialTest extends global Class TestCase
class FactorialTest extends TestCase
{
    // Test if factorial of a String
    public function testFactorialOfString()
    {
        $this->assertNull(factorial('abc'));
    }

    // Test if factorial of a boolean
    public function testFactorialOfBoolean()
    {
        $this->assertNull(factorial(false));
    }

    // Test if factorial of a float
    public function testFactorialOfFloat()
    {
        $this->assertNull(factorial(1.5));
    }

    // Test if factorial of a negative number
    public function testFactorialOfNegativeNumber()
    {
        $this->assertNull(factorial(-3));
    }

    // Test if factorial of a  integer and correct result 
    public function testFactorialOfRandomInteger()
    {
        $this->assertEquals(24, factorial(4)); 
    }

    public function testFactorialOfFive()
    {
        $this->assertEquals(120, factorial(5)); 
    }

    public function testFactorialOfOne()
    {
        $this->assertEquals(1, factorial(1)); 
    }

    public function testFactorialOfZero()
    {
        $this->assertEquals(1, factorial(0)); 
    }
}
?>
