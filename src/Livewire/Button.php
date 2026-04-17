<?php

namespace W4\NativeUI\Livewire;

use Livewire\Component;

class Button extends Component
{
    public string $label = '';
    public string $variant = 'primary';
    public string $size = 'md';
    public ?string $href = null;
    public string $type = 'button';
    public bool $disabled = false;
    public bool $loading = false;
    public bool $active = false;
    public bool $readonly = false;
    public bool $square = false;
    public bool $circle = false;
    public bool $wide = false;
    public bool $block = false;

    public function render()
    {
        return view('w4-native::livewire.button');
    }
}
