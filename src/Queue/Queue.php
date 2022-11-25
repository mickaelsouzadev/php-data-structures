<?php

namespace Mickaelsouzadev\DataStrucutures\Queue;

use Mickaelsouzadev\DataStrucutures\Interfaces\QueueInterface;
use Mickaelsouzadev\DataStrucutures\Interfaces\DataStructureInterface;

class Queue implements DataStructureInterface, QueueInterface
{
    private int $count;
    private int $lowestCount;
    private array $items;

    public function __construct()
    {
        $this->count = 0;
        $this->lowestCount = 0;
        $this->items = [];
    }

    public function enqueue(mixed ...$elements): void
    {
        foreach ($elements as $element) {
            $this->items[$this->count] = $element;
            $this->count++;
        }
    }

    public function dequeue(): mixed
    {
        if (!$this->isEmpty()) {
            $element = $this->items[$this->lowestCount];
            unset($this->items[$this->lowestCount]);
            $this->lowestCount++;

            return $element;
        }
    }

    public function peek(): mixed
    {
        if (!$this->isEmpty()) {
            return $this->items[$this->lowestCount];
        }
    }

    public function isEmpty(): bool
    {
        return $this->size() === 0;
    }

    public function size(): int
    {
        return $this->count - $this->lowestCount;
    }

    public function clear(): void
    {
        $this->items = [];
        $this->count = 0;
        $this->lowestCount = 0;
    }
}
