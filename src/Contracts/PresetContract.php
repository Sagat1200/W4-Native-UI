<?php

namespace W4\NativeUi\Contracts;

interface PresetContract
{
    public function name(): string;

    public function tokens(): array;
}
