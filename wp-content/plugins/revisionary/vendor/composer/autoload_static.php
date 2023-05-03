<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18b5e1897c5397f2eef6fe77d3deb479
{
    public static $files = array (
        '41c664bd04a95c2d6a2f2a3e00f06593' => __DIR__ . '/..' . '/publishpress/wordpress-reviews/ReviewsController.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PPVersionNotices\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PPVersionNotices\\' => 
        array (
            0 => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18b5e1897c5397f2eef6fe77d3deb479::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18b5e1897c5397f2eef6fe77d3deb479::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit18b5e1897c5397f2eef6fe77d3deb479::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit18b5e1897c5397f2eef6fe77d3deb479::$classMap;

        }, null, ClassLoader::class);
    }
}