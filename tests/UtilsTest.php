<?php

namespace Hexlet\PhpUnit\Tests\UtilsTest;

use PHPUnit\Framework\TestCase;

use function Hexlet\PhpUnit\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
