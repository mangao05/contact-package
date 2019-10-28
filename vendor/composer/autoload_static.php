<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74bc5ea1ff1593173eea903f3aba848e
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Naotech\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Naotech\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74bc5ea1ff1593173eea903f3aba848e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74bc5ea1ff1593173eea903f3aba848e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
