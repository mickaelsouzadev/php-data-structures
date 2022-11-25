<?php

namespace Mickaelsouzadev\DataStrucutures\Stack;

use Mickaelsouzadev\DataStrucutures\Interfaces\StackInterface;
use Mickaelsouzadev\DataStrucutures\Interfaces\DataStructureInterface;

class StackAssoc implements DataStructureInterface, StackInterface
{
    private int $count;
    private array $items;

    public function __construct()
    {
        $this->count = 0;
        $this->items = [];
    }

    public function push(mixed $element): void
    {
        $this->items[$this->count] = $element;
        $this->count++;
    }

    public function pop(): mixed
    {
        if (!$this->isEmpty()) {
            $this->count--;
            $element = $this->items[$this->count];
            unset($this->items[$this->count]);

            return $element;
        }
    }

    public function peek(): mixed
    {
        if (!$this->isEmpty()) {
            return $this->items[$this->count - 1];
        }
    }

    public function isEmpty(): bool
    {
        return $this->count === 0;
    }

    public function size(): int
    {
        return $this->count;
    }

    public function clear(): void
    {
        while (!$this->isEmpty()) {
            $this->pop();
        }
    }
}
