<?php

namespace W4\Native\Contracts;

interface ComponentThemeContract
{
    public function component(): string;

    public function resolve(array $state = []): array;
}