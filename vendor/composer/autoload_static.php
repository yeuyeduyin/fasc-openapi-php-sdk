<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2897b7689e426083c76f4a1cfb0c0a5
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FddCloud\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FddCloud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/FddCloud',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2897b7689e426083c76f4a1cfb0c0a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2897b7689e426083c76f4a1cfb0c0a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2897b7689e426083c76f4a1cfb0c0a5::$classMap;

        }, null, ClassLoader::class);
    }
}
