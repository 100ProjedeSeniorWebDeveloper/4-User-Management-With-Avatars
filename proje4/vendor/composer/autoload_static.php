<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda8ce8fda3efaf2d1b052c3098bb852c
{
    public static $classMap = array (
        'Eventviva\\ImageResize' => __DIR__ . '/..' . '/eventviva/php-image-resize/src/ImageResize.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitda8ce8fda3efaf2d1b052c3098bb852c::$classMap;

        }, null, ClassLoader::class);
    }
}
