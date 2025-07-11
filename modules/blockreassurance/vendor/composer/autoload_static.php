<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26073f7269134cc5876b1b1420904e9e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\BlockReassurance\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\BlockReassurance\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ReassuranceActivity' => __DIR__ . '/../..' . '/classes/ReassuranceActivity.php',
        'blockreassurance' => __DIR__ . '/../..' . '/blockreassurance.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26073f7269134cc5876b1b1420904e9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26073f7269134cc5876b1b1420904e9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26073f7269134cc5876b1b1420904e9e::$classMap;

        }, null, ClassLoader::class);
    }
}
