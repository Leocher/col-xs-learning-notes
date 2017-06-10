<?php

namespace App\Services;

class Http
{
    public function __construct()
    {
    }

    public function post($status)
    {
        var_dump('I posted a status :'.$status);
    }
}
