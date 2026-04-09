<?php

namespace W4\Native\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class W4NativeRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/theme-lab', function () {
            return view('w4-native::w4-theme-lab');
        })->name('w4-native.theme-lab');

        Route::get('/w4/button', function () {
            return view('w4-native::ui.w4-native-button');
        })->name('w4-native.button');
    }
}
