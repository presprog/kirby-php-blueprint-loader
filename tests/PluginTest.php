<?php declare(strict_types=1);

namespace Tests\PresProg\PhpBlueprintLoader;

use Kirby\Cms\App;

class PluginTest extends TestCase
{
    public function testExtendsBlueprintsOnLoad(): void
    {
        $blueprintDir  = __DIR__ . '/temp/site/blueprints';

        // Load plugin
        require dirname(__DIR__) . '/index.php';

        $kirby = new App([
            'roots' => [
                'index' => self::$tmpDir,
            ],
        ]);

        $blueprints = $kirby->extensions('blueprints');

        $this->assertEquals($blueprints['pages/blueprint'], $blueprintDir . '/pages/blueprint.php');
        $this->assertEquals($blueprints['files/blueprint'], $blueprintDir . '/files/blueprint.php');
    }
}
