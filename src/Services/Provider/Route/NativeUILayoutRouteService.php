<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUILayoutRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/card', function () {
            return view('w4-native::layout.w4-native-ui-card');
        })->name('w4-native.card');

        Route::get('/w4/container', function () {
            return view('w4-native::layout.w4-native-ui-container');
        })->name('w4-native.container');

        Route::get('/w4/divider', function () {
            return view('w4-native::layout.w4-native-ui-divider');
        })->name('w4-native.divider');

        Route::get('/w4/grid', function () {
            return view('w4-native::layout.w4-native-ui-grid');
        })->name('w4-native.grid');

        Route::get('/w4/panel', function () {
            return view('w4-native::layout.w4-native-ui-panel');
        })->name('w4-native.panel');

        Route::get('/w4/section', function () {
            return view('w4-native::layout.w4-native-ui-section');
        })->name('w4-native.section');

        Route::get('/w4/stack', function () {
            return view('w4-native::layout.w4-native-ui-stack');
        })->name('w4-native.stack');
    }
}
