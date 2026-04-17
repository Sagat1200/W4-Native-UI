<?php

namespace W4\NativeUI\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public string $variant = 'default';
    public string $size = 'md';
    public ?string $message = null;
    public bool $disabled = false;
    public bool $active = false;
    public bool $hidden = false;
    public bool $dismissed = false;

    public function render()
    {
        return view('w4-native::livewire.alert');
    }
}
