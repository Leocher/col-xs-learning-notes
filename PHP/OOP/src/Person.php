<?php

namespace Laravist;

class Person {
    protected $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
