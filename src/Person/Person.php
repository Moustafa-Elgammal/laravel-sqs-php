<?php

namespace Elgammal\Test\Person;

abstract class Person
{
    public function __construct(protected string  $name, protected int $age)
    {
    }

    abstract public function getName(): string;
}