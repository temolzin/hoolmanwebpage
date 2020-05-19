<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc80300c16d803b3c21c82644e021a102
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc80300c16d803b3c21c82644e021a102::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc80300c16d803b3c21c82644e021a102::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
