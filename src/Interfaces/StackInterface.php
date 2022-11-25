<?php

namespace Mickaelsouzadev\DataStrucutures\Interfaces;

interface StackInterface
{
    public function push(mixed $element): void;

    public function pop(): mixed;
}
