<?php

class Math {
    public static function add(...$num)
    {
        return array_sum($num);
    }
}

echo Math::add(1,2,3);
