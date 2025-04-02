<?php declare(strict_types=1);

use Kirby\Cms\App;
use PresProg\PhpBlueprintLoader\PhpBlueprintLoader;

@include_once __DIR__ . '/vendor/autoload.php';

App::plugin('presprog/php-blueprint-loader', [
    'hooks' => [
        'system.loadPlugins:after' => function () {
            /** @var App $this */
            $blueprints = PhpBlueprintLoader::loadFromFolder($this->root('blueprints'));

            $this->extend([
                'blueprints' => $blueprints
            ]);
        }
    ]
]);
