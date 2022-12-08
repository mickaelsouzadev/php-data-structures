<?php

namespace Mickaelsouzadev\DataStrucutures\Deque;

use Mickaelsouzadev\DataStrucutures\Interfaces\DequeInterface;
use Mickaelsouzadev\DataStrucutures\Interfaces\GenericDataStructureInterface;

class Deque implements GenericDataStructureInterface, DequeInterface
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

    public function addFront(mixed $element): void
    {
        if ($this->isEmpty()) {
            $this->addBack($element);
            return;
        }

        if ($this->lowestCount > 0) {
            $this->lowestCount--;
            $this->items[$this->lowestCount] = $element;
            return;
        }

        for ($i = $this->count; $i > 0; $i--) {
            $this->items[$i] = $this->items[$i - 1];
        }

        $this->count++;
        $this->lowestCount = 0;
        $this->items[0] = $element;
    }

    public function addBack(mixed $element): void
    {
        $this->items[$this->count] = $element;
        $this->count++;
    }

    public function removeFront(): mixed
    {
        if (!$this->isEmpty()) {
            $element = $this->items[$this->lowestCount];
            unset($this->items[$this->lowestCount]);
            $this->lowestCount++;

            return $element;
        }
    }

    public function removeBack(): mixed
    {
        if (!$this->isEmpty()) {
            $this->count--;
            $element = $this->items[$this->count];
            unset($this->items[$this->count]);

            return $element;
        }
    }

    public function peekFront(): mixed
    {
        if (!$this->isEmpty()) {
            return $this->items[$this->lowestCount];
        }
    }

    public function peekBack(): mixed
    {
        if (!$this->isEmpty()) {
            return $this->items[$this->count - 1];
        }
    }

    public function isEmpty(): bool
    {
        return $this->size() == 0;
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
