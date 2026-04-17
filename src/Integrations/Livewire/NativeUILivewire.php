<?php

namespace W4\NativeUI\Integrations\Livewire;

use Livewire\Livewire;
use W4\NativeUI\Livewire\Alert;
use W4\NativeUI\Livewire\Badge;
use W4\NativeUI\Livewire\Button;
use W4\NativeUI\Livewire\Card;
use W4\NativeUI\Livewire\Toggle;

class NativeUILivewire
{
    public static function register(): void
    {
        Livewire::component('w4-native-ui.alert', Alert::class);
        Livewire::component('w4-native-ui.badge', Badge::class);
        Livewire::component('w4-native-ui.button', Button::class);
        Livewire::component('w4-native-ui.card', Card::class);
        Livewire::component('w4-native-ui.toggle', Toggle::class);
    }
}
