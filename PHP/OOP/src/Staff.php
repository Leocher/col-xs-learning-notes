<?php

namespace Laravist;

class Staff {
    protected $members = [];

    public function add(Person $person)
    {
        $this->members[] = $person;
    }
}