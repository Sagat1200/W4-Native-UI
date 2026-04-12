<?php

namespace W4\NativeUI\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use W4\NativeUI\Providers\NativeUIServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            NativeUIServiceProvider::class,
        ];
    }
}