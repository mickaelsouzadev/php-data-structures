<?php

namespace Mickaelsouzadev\DataStrucutures\Stack;

use Mickaelsouzadev\DataStrucutures\Interfaces\StackInterface;
use Mickaelsouzadev\DataStrucutures\Interfaces\GenericDataStructureInterface;

class Stack implements GenericDataStructureInterface, StackInterface
{
    private array $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function push(mixed $element): void
    {
        array_push($this->items, $element);
    }

    public function pop(): mixed
    {
        return array_pop($this->items);
    }

    public function peek(): mixed
    {
        return $this->items[$this->size() - 1];
    }

    public function isEmpty(): bool
    {
        return $this->size() === 0;
    }

    public function size(): int
    {
        return count($this->items);
    }

    public function clear(): void
    {
        while (!$this->isEmpty()) {
            $this->pop();
        }
    }
}
