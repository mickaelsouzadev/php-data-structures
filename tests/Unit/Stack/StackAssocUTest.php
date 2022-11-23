<?php

namespace Mickaelsouzadev\DataStrucutures\Tests\Unit\Stack;

use PHPUnit\Framework\TestCase;
use Mickaelsouzadev\DataStrucutures\Stack\StackAssoc;

class StackAssocUTest extends TestCase
{
    public function testIsEmptyIsTrue(): void
    {
        $stack = $this->getStackInstance();

        $this->assertTrue($stack->isEmpty());
    }

    public function testPeek(): void
    {
        $stack = $this->getStackInstance();
        $stack->push(5);
        $stack->push(8);

        $this->assertEquals(8, $stack->peek());
    }

    public function testPushAndSizeAndIsNotEmpty(): void
    {
        $stack = $this->getStackInstance();
        $stack->push(5);
        $stack->push(8);
        $stack->push(11);

        $this->assertEquals(3, $stack->size());
        $this->assertEquals(false, $stack->isEmpty());
    }

    public function testpopAndSize(): void
    {
        $stack = $this->getStackInstance();
        $stack->push(5);
        $stack->push(8);
        $stack->push(11);
        $stack->push(15);

        $pop1 = $stack->pop();
        $pop2 = $stack->pop();

        $this->assertEquals(2, $stack->size());
        $this->assertEquals(15, $pop1);
        $this->assertEquals(11, $pop2);
    }

    private function getStackInstance()
    {
        return new StackAssoc();
    }
}
