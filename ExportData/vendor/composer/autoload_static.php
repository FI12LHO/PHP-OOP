<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeda5c5a58beeb1e91c4e008a646de7d
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Export\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Export\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Export',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeda5c5a58beeb1e91c4e008a646de7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeda5c5a58beeb1e91c4e008a646de7d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}