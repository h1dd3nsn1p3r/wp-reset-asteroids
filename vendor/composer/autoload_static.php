<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita198ffa0e732ec2cd58e101b7e89a0ec
{
    public static $files = array (
        'b7e1c4cbafbabee94a69519a450ea263' => __DIR__ . '/..' . '/kucrut/vite-for-wp/vite-for-wp.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita198ffa0e732ec2cd58e101b7e89a0ec::$classMap;

        }, null, ClassLoader::class);
    }
}
