<?php

namespace W4\NativeUI\Livewire;

use Livewire\Component;

class Badge extends Component
{
    public string $label = '';
    public string $variant = 'default';
    public string $size = 'md';
    public bool $outline = false;
    public bool $soft = false;

    public function render()
    {
        return view('w4-native::livewire.badge');
    }
}
