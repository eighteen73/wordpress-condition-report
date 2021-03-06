<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a9879f73ced412b89b3cf44c1bfce04
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eighteen73\\ConditionReport\\' => 27,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eighteen73\\ConditionReport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a9879f73ced412b89b3cf44c1bfce04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a9879f73ced412b89b3cf44c1bfce04::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a9879f73ced412b89b3cf44c1bfce04::$classMap;

        }, null, ClassLoader::class);
    }
}
