<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7a1bb05e9980dfe88b0afb4fc8b8c64
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7a1bb05e9980dfe88b0afb4fc8b8c64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7a1bb05e9980dfe88b0afb4fc8b8c64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7a1bb05e9980dfe88b0afb4fc8b8c64::$classMap;

        }, null, ClassLoader::class);
    }
}