<?php

namespace W4\Native\Contracts;

interface PresetContract
{
    public function name(): string;

    public function tokens(): array;
}
