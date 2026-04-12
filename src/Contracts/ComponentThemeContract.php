<?php

namespace W4\Native\Daisy\Contracts;

interface ComponentThemeContract
{
    public function component(): string;

    public function resolve(array $state = []): array;
}
