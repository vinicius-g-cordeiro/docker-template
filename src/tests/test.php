<?php
/**
 * @file phpunit test file test.php
 * @package vinicius-g-cordeiro/docker-template
 * @version 0.0.1
 * @copyright 2025 Vinícius Gonçalves Cordeiro <vinicordeirogo@gmail.com>
 * @link https://github.com/vinicius-g-cordeiro/docker-template
 * @link https://linkedin.com/in/vinicordeirox
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Test that 1 is equal to 1 
     */
    public function testExample()
    {
        $this->assertTrue(1 == 1);
    }

    /**
     * Test that 1 is not equal to 2 
     */
    public function testExample2()
    {
        $this->assertFalse(1 === 2);
    }
}