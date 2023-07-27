<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0be301b626f75c08f588d8f20516b402
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        'aa75ea0761a2f40c1f3b32ad314f86c4' => __DIR__ . '/..' . '/phpseclib/mcrypt_compat/lib/mcrypt.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib3\\' => 11,
        ),
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib3\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0be301b626f75c08f588d8f20516b402::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0be301b626f75c08f588d8f20516b402::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0be301b626f75c08f588d8f20516b402::$classMap;

        }, null, ClassLoader::class);
    }
}
