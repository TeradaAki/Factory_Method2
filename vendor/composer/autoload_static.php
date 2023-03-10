<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit874761bb326ed4fe152d5c29fae75568
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Terada\\Method\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Terada\\Method\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit874761bb326ed4fe152d5c29fae75568::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit874761bb326ed4fe152d5c29fae75568::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit874761bb326ed4fe152d5c29fae75568::$classMap;

        }, null, ClassLoader::class);
    }
}
