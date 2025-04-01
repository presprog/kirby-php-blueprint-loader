<?php declare(strict_types=1);

namespace Tests\PresProg\PhpBlueprintLoader;

use PHPUnit\Framework\TestCase;
use PresProg\PhpBlueprintLoader\PhpBlueprintLoader;

class PhpBlueprintLoaderTest extends TestCase
{
    public function testLoadsPhpBlueprintsFromFolder(): void
    {
        $blueprintDir = __DIR__ . '/fixtures/site/blueprints';

        $pageBlueprint = require  $blueprintDir . '/pages/php-blueprint.php';
        $fileBlueprint = require  $blueprintDir . '/files/php-blueprint.php';

        $blueprints = PhpBlueprintLoader::loadFromFolder($blueprintDir);

        $this->assertEquals([
            'pages/php-blueprint' => $pageBlueprint,
            'files/php-blueprint' => $fileBlueprint,
        ], $blueprints);
    }
}
