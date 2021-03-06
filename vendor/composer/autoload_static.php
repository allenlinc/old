<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc003f01d49d34b492e72b6f44b0b49f0
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NoahBuscher\\Macaw\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NoahBuscher\\Macaw\\' => 
        array (
            0 => __DIR__ . '/..' . '/noahbuscher/macaw',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc003f01d49d34b492e72b6f44b0b49f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc003f01d49d34b492e72b6f44b0b49f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
