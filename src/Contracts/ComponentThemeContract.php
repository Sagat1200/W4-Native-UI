<?php

namespace W4\NativeUi\Contracts;

interface ComponentThemeContract
{
    public function component(): string;

    public function resolve(array $state = []): array;
}
