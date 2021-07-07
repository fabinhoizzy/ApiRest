<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28fa3a1c1eb159ec1d32768310d4af7c
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28fa3a1c1eb159ec1d32768310d4af7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28fa3a1c1eb159ec1d32768310d4af7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28fa3a1c1eb159ec1d32768310d4af7c::$classMap;

        }, null, ClassLoader::class);
    }
}
