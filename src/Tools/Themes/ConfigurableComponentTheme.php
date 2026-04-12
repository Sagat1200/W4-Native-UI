<?php

namespace W4\Native\Daisy\Tools\Themes;

use W4\Native\Daisy\Tools\Themes\AbstractComponentTheme;

class ConfigurableComponentTheme extends AbstractComponentTheme
{
    public function __construct(
        protected string $name,
        protected array $allowedVariants = [],
        protected array $allowedSizes = [],
        protected array $allowedStates = []
    ) {}

    public function component(): string
    {
        return $this->name;
    }

    protected function variants(): array
    {
        return $this->allowedVariants;
    }

    protected function sizes(): array
    {
        return $this->allowedSizes;
    }

    protected function states(): array
    {
        return $this->allowedStates;
    }
}
