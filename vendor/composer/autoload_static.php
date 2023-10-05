<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9025f296d2a605d0b683e42e0f9b6438
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9025f296d2a605d0b683e42e0f9b6438::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9025f296d2a605d0b683e42e0f9b6438::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9025f296d2a605d0b683e42e0f9b6438::$classMap;

        }, null, ClassLoader::class);
    }
}