<?php

class Person{
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age < 18){
            throw new Exception('not old enough');
        }
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

}

$jeffrey = new Person('jeffrey');
$jeffrey->setAge(30);
var_dump($jeffrey->getAge());
