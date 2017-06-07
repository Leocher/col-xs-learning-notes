<?php

abstract class Shape {
    protected $color;

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
    //子类中必须实现，否则无法运行
}

class Square extends Shape {
    protected $length = 4;
    public function getArea()
    {
        return pow($this->length,2);
    }
}

class Circle extends Shape {
    public function getArea()
    {
        // TODO: Implement getArea() method.
    }
}

$shape = new Circle();
var_dump($shape);
