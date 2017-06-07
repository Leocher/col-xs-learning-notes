<?php

class Person {
    public static $age = 1;
    public function haveBirthday()
    {
        self::$age ++;
    }
}

$jelly = new Person();
$jelly->haveBirthday();
$jelly->haveBirthday();

$jane = new Person();
$jane->haveBirthday();

echo Person::$age;