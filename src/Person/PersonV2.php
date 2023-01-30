<?php

namespace Elgammal\Test\Person;

class PersonV2 extends Person
{

    public function getName(): string
    {
        return $this->name;
    }
}
