<?php

namespace W4\NativeUi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use W4\NativeUi\Providers\W4NativeUiServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            W4NativeUiServiceProvider::class,
        ];
    }
}
