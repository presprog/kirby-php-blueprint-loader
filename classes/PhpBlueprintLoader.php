<?php declare(strict_types=1);

namespace PresProg\PhpBlueprintLoader;

class PhpBlueprintLoader
{
    public static function loadFromFolder(string $dir): array
    {
        $phpBlueprints = $dir . '/**/*.php';
        $blueprints    = [];

        foreach (glob($phpBlueprints) ?? [] as $path) {
            $name             = basename($path, '.php');
            $parentDirectory  = basename(dirname($path));
            $key              = $parentDirectory === 'blueprints' ? $name : $parentDirectory . '/' . $name;
            $blueprints[$key] = require $path;
        }

        return $blueprints;
    }
}
