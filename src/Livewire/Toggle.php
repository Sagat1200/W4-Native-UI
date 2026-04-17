<?php

namespace W4\NativeUI\Livewire;

use Livewire\Component;

class Toggle extends Component
{
    public bool $checked = false;
    public string $variant = 'default';
    public string $size = 'md';
    public ?string $name = null;
    public ?string $label = null;
    public bool $disabled = false;
    public bool $readonly = false;
    public bool $invalid = false;
    public bool $valid = false;
    public bool $loading = false;

    public function render()
    {
        return view('w4-native::livewire.toggle');
    }
}
