<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73f250f1ba83fe396fb4e48f72efcf33
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\PresProg\\PhpBlueprintLoader\\' => 34,
        ),
        'P' => 
        array (
            'PresProg\\PhpBlueprintLoader\\' => 28,
        ),
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\PresProg\\PhpBlueprintLoader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'PresProg\\PhpBlueprintLoader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'PresProg\\PhpBlueprintLoader\\PhpBlueprintLoader' => __DIR__ . '/../..' . '/classes/PhpBlueprintLoader.php',
        'Tests\\PresProg\\PhpBlueprintLoader\\PhpBlueprintLoaderTest' => __DIR__ . '/../..' . '/tests/PhpBlueprintLoaderTest.php',
        'Tests\\PresProg\\PhpBlueprintLoader\\PluginTest' => __DIR__ . '/../..' . '/tests/PluginTest.php',
        'Tests\\PresProg\\PhpBlueprintLoader\\TestCase' => __DIR__ . '/../..' . '/tests/TestCase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73f250f1ba83fe396fb4e48f72efcf33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73f250f1ba83fe396fb4e48f72efcf33::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73f250f1ba83fe396fb4e48f72efcf33::$classMap;

        }, null, ClassLoader::class);
    }
}
