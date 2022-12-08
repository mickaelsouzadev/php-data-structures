<?php

namespace Mickaelsouzadev\DataStrucutures\Interfaces;

interface StackInterface
{
    public function peek(): mixed;

    public function push(mixed $element): void;

    public function pop(): mixed;
}
