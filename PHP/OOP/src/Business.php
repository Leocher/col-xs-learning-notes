<?php

namespace Laravist;

class Business {
    protected $staff;

    /**
     * Business constructor.
     * @param $staff
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }
}