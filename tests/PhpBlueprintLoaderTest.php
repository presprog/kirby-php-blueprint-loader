<?php declare(strict_types=1);

namespace Tests\PresProg\PhpBlueprintLoader;

use PresProg\PhpBlueprintLoader\PhpBlueprintLoader;

class PhpBlueprintLoaderTest extends TestCase
{
    public function testLoadsPhpBlueprintsFromFolder(): void
    {
        $blueprintDir = __DIR__ . '/fixtures/site/blueprints';

        $blueprints = PhpBlueprintLoader::loadFromFolder($blueprintDir);

        $this->assertEquals([
            'pages/blueprint' => $blueprintDir . '/pages/blueprint.php',
            'files/blueprint' => $blueprintDir . '/files/blueprint.php',
        ], $blueprints);
    }
}
