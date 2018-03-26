<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit329cd0e0bec2fd7dba2d3375a17ba46f
{
    public static $files = array (
        '3d981a6cc643d44ac87476987141ca2c' => __DIR__ . '/../..' . '/core/helpers/session_helper.php',
        '2c33e08d1a407ef9570f29b4aa2635b8' => __DIR__ . '/../..' . '/core/helpers/url_helper.php',
        '02af9b8b0f4a3b9098fa5905190f128c' => __DIR__ . '/../..' . '/core/helpers/aux_helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit329cd0e0bec2fd7dba2d3375a17ba46f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit329cd0e0bec2fd7dba2d3375a17ba46f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
