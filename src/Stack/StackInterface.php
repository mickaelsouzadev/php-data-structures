<?php

namespace Mickaelsouzadev\DataStrucutures\Stack;

interface StackInterface
{
    public function push(mixed $element): void;

    public function pop(): mixed;

    public function peek(): mixed;

    public function isEmpty(): bool;

    public function size(): int;
}
