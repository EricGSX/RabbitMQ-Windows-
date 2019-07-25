<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53f9f9adc97de9b0247775793b51c056
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53f9f9adc97de9b0247775793b51c056::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53f9f9adc97de9b0247775793b51c056::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
