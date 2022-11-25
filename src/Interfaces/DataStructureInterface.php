<?php

namespace Mickaelsouzadev\DataStrucutures\Interfaces;

interface DataStructureInterface
{
    public function peek(): mixed;

    public function isEmpty(): bool;

    public function size(): int;

    public function clear(): void;
}
