<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d7618321cbc26cb157b82cf4a7081d3
{
    public static $classMap = array (
        'Ps_Wirepayment' => __DIR__ . '/../..' . '/ps_wirepayment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7d7618321cbc26cb157b82cf4a7081d3::$classMap;

        }, null, ClassLoader::class);
    }
}
