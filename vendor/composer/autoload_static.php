<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit922f9f749579e740c99730f79506598f
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'itrax\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'itrax\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit922f9f749579e740c99730f79506598f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit922f9f749579e740c99730f79506598f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit922f9f749579e740c99730f79506598f::$classMap;

        }, null, ClassLoader::class);
    }
}
