<?php

namespace Orchestra\Testbench\Tests\Helpers;

use Orchestra\Testbench\TestCase;

use function Orchestra\Testbench\transform_relative_path;

class TransformRelativePathTest extends TestCase
{
    /** @test */
    public function it_can_use_transform_relative_path()
    {
        $this->assertSame(
            realpath(__DIR__.DIRECTORY_SEPARATOR.'TransformRelativePathTest.php'),
            transform_relative_path('./TransformRelativePathTest.php', realpath(__DIR__))
        );

        $this->assertSame(
            realpath(dirname(__DIR__, 1).DIRECTORY_SEPARATOR.'Helpers'.DIRECTORY_SEPARATOR.'TransformRelativePathTest.php'),
            transform_relative_path('./Helpers/TransformRelativePathTest.php', realpath(dirname(__DIR__, 1)))
        );
    }
}
