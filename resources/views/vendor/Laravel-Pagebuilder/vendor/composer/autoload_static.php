<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5936b802693d57b8e03d8fbcf2f7f9d
{
    public static $files = array (
        'a0dfc604d59f03ee36c4883906a6ff25' => __DIR__ . '/..' . '/hansschouten/phpagebuilder/src/Core/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPageBuilder\\' => 14,
        ),
        'H' => 
        array (
            'HansSchouten\\LaravelPageBuilder\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPageBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/hansschouten/phpagebuilder/src',
        ),
        'HansSchouten\\LaravelPageBuilder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5936b802693d57b8e03d8fbcf2f7f9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5936b802693d57b8e03d8fbcf2f7f9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5936b802693d57b8e03d8fbcf2f7f9d::$classMap;

        }, null, ClassLoader::class);
    }
}
