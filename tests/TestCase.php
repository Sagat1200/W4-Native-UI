<?php

namespace W4\Native\Daisy\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use W4\Native\Daisy\Providers\W4NativeDaisyServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            W4NativeDaisyServiceProvider::class,
        ];
    }
}
