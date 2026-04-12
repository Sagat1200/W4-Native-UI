<?php

namespace W4\NativeUI\Contracts;

interface ComponentThemeContract
{
    public function component(): string;

    public function resolve(array $state = []): array;
}
