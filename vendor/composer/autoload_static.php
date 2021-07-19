<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ff721c8fd642a00a64225fea8fb49d1
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enum\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/enum',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ff721c8fd642a00a64225fea8fb49d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ff721c8fd642a00a64225fea8fb49d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ff721c8fd642a00a64225fea8fb49d1::$classMap;

        }, null, ClassLoader::class);
    }
}
