<?php

namespace W4\NativeUI\Livewire;

use Livewire\Component;

class Card extends Component
{
    public string $variant = 'base-100';
    public string $size = 'md';
    public bool $bordered = false;
    public ?string $borderedVariant = null;
    public bool $elevated = false;
    public bool $ghost = false;
    public ?string $title = null;
    public ?string $body = null;

    public function render()
    {
        return view('w4-native::livewire.card');
    }
}
