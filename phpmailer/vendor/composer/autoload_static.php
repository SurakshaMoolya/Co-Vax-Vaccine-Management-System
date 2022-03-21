<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit497865970373a32a594c940187afbcea
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit497865970373a32a594c940187afbcea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit497865970373a32a594c940187afbcea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit497865970373a32a594c940187afbcea::$classMap;

        }, null, ClassLoader::class);
    }
}