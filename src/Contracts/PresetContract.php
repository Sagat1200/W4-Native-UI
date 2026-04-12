<?php

namespace W4\NativeUI\Contracts;

interface PresetContract
{
    public function name(): string;

    public function tokens(): array;
}
