<?php

namespace Mickaelsouzadev\DataStrucutures\Interfaces;

interface DequeInterface
{
    public function addFront(mixed $element): void;

    public function addBack(mixed $element): void;

    public function removeFront(): mixed;

    public function removeBack(): mixed;

    public function peekFront(): mixed;

    public function peekBack(): mixed;
}
