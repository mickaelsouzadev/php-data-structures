<?php

namespace Mickaelsouzadev\DataStrucutures\Tests\Unit\Queue;

use PHPUnit\Framework\TestCase;
use Mickaelsouzadev\DataStrucutures\Queue\Queue;

class QueueUTest extends TestCase
{

    public function testQueueIsEmpty(): void
    {
        $queue = $this->getQueueInstance();

        $this->assertTrue($queue->isEmpty());
    }

    public function testEnqueueDequeueAndSize(): void
    {
        $queue = $this->getQueueInstance();
        $this->assertEquals(0, $queue->size());

        $queue->enqueue('Peter', 'Bruce');
        $this->assertEquals(2, $queue->size());

        $queue->enqueue('Tony', 'Clark');
        $this->assertEquals(4, $queue->size());

        $queue->dequeue();
        $queue->dequeue();
        $queue->dequeue();
        $this->assertEquals(1, $queue->size());
    }

    public function testDequeueAndPeek()
    {
        $queue = $this->getQueueInstance();
        $queue->enqueue(
            'Krakatoa',
            'Vesuvius',
            'Kilauea',
            'Pinatubo',
            'Thera',
            'St. Helens'
        );

        $this->assertEquals('Krakatoa', $queue->peek());
        $queue->dequeue();
        $this->assertEquals('Vesuvius', $queue->peek());
        $queue->dequeue();
        $this->assertEquals('Kilauea', $queue->peek());
    }

    public function testClear()
    {
        $queue = $this->getQueueInstance();
        $queue->enqueue(
            'Krakatoa',
            'Vesuvius',
            'Kilauea',
            'Pinatubo',
            'Thera',
            'St. Helens'
        );

        $this->assertEquals(6, $queue->size());
        $queue->clear();
        $this->assertEquals(0, $queue->size());
        $this->assertTrue($queue->isEmpty());
    }

    private function getQueueInstance()
    {
        return new Queue();
    }
}
