<?php

class Mother {
    protected function getEyesCount()
    {
        return 2;
    }
}

class Child extends Mother {
    public function getEyesCount()
    {
        return 3;
    }
}

$child = new Child();
var_dump($child->getEyesCount());
