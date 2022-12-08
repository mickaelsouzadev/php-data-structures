<?php

namespace Mickaelsouzadev\DataStrucutures\Interfaces;

interface GenericDataStructureInterface
{
    public function isEmpty(): bool;

    public function size(): int;

    public function clear(): void;
}
