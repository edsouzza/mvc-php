<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd85a104cef5774829849d25e9fb14d90
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd85a104cef5774829849d25e9fb14d90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd85a104cef5774829849d25e9fb14d90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd85a104cef5774829849d25e9fb14d90::$classMap;

        }, null, ClassLoader::class);
    }
}
