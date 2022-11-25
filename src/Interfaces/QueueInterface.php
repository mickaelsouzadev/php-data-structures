<?php

namespace Mickaelsouzadev\DataStrucutures\Interfaces;

interface QueueInterface
{
    public function enqueue(mixed ...$elements): void;

    public function dequeue(): mixed;
}
