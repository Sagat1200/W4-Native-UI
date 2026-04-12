<?php

namespace W4\Native\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use W4\Native\Providers\NativeServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            NativeServiceProvider::class,
        ];
    }
}