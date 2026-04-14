<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUIInteractiveRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/modal', function () {
            return view('w4-native::interactive.w4-native-ui-modal');
        })->name('w4-native.modal');

        Route::get('/w4/tooltip', function () {
            return view('w4-native::interactive.w4-native-ui-tooltip');
        })->name('w4-native.tooltip');
    }
}
