<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit326c702113033b8eb9bc3acb13c74b9f
{
    public static $files = array (
        '4e84b12a1270cc50473894adbc1caf69' => __DIR__ . '/../..' . '/app/helpers.php',
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit326c702113033b8eb9bc3acb13c74b9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit326c702113033b8eb9bc3acb13c74b9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit326c702113033b8eb9bc3acb13c74b9f::$classMap;

        }, null, ClassLoader::class);
    }
}
