<?php

namespace W4\Native\Daisy\Contracts;

interface PresetContract
{
    public function name(): string;

    public function tokens(): array;
}
