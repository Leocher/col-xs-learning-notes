<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73f7f7b4067733e1ee0059f08a984962
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laravist\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laravist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73f7f7b4067733e1ee0059f08a984962::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73f7f7b4067733e1ee0059f08a984962::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
