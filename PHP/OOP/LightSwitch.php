<?php

class LightSwitch {
    public function on()
    {
        $this->connect();
    }

    public function off()
    {

    }

    protected function connect()
    {
        var_dump('connect');
    }
}

$light = new LightSwitch();
$light->on();
