<?php

namespace Mickaelsouzadev\DataStrucutures\Tests\Unit\Deque;

use PHPUnit\Framework\TestCase;
use Mickaelsouzadev\DataStrucutures\Deque\Deque;

class DequeUTest extends TestCase
{

    public function testDequeIsEmpty(): void
    {
        $deque = $this->getDequeInstance();

        $this->assertTrue($deque->isEmpty());
    }

    public function testDequeAddBackAndRemove(): void
    {
        $deque = $this->getDequeInstance();

        $deque->addBack("Kilauea");
        $deque->addBack("Krakatoa");
        $deque->addBack("Vesuvius");

        $this->assertEquals(3, $deque->size());
        $this->assertEquals("Kilauea", $deque->removeFront());
        $this->assertEquals("Vesuvius", $deque->removeBack());
        $this->assertEquals("Krakatoa", $deque->peekBack());
        $this->assertEquals("Krakatoa", $deque->peekFront());
    }

    public function testDequeAddFrontAndRemove(): void
    {
        $deque = $this->getDequeInstance();

        $deque->addBack("Kilauea");
        $deque->addBack("Krakatoa");
        $deque->addBack("Vesuvius");

        $this->assertEquals(3, $deque->size());
        $this->assertEquals("Kilauea", $deque->removeFront());
        $this->assertEquals("Vesuvius", $deque->peekBack());
        $this->assertEquals("Krakatoa", $deque->peekFront());

        $deque->addFront("Kilauea");
        $this->assertEquals("Kilauea", $deque->peekFront());
    }

    public function testDequeClear(): void
    {
        $deque = $this->getDequeInstance();

        $deque->addBack("Kilauea");
        $deque->addBack("Krakatoa");
        $deque->addBack("Vesuvius");
        $deque->clear();

        $this->assertTrue($deque->isEmpty());
    }

    private function getDequeInstance(): Deque
    {
        return new Deque();
    }
}
