<?php declare(strict_types=1);

namespace Tests\PresProg\PhpBlueprintLoader;

use Kirby\Cms\App;
use Kirby\Filesystem\Dir;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected static string $tmpDir;

    public static function setUpBeforeClass(): void
    {
        self::$tmpDir = __DIR__ . '/temp';
    }

    protected function setUp(): void
    {
        // Do not register any error handler
        App::$enableWhoops = false;

        Dir::copy(__DIR__ . '/fixtures', self::$tmpDir);
    }

    protected function tearDown(): void
    {
        Dir::remove(self::$tmpDir);
    }
}
