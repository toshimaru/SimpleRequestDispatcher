<?php
/**
 * Sample Test
 * TODO: write real test code
 */
class HelloTest extends PHPUnit_Framework_TestCase
{
    public function setUp() {
    }

    public function testHelloWorld()
    {
        $hello = 'Hello World';
        $this->assertEquals('Hello World', $hello);
    }
}