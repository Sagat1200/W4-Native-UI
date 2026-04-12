<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUIUIRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/theme-lab', function () {
            return view('w4-native::w4-theme-lab');
        })->name('w4-native.theme-lab');

        Route::get('/w4/button', function () {
            return view('w4-native::ui.w4-native-button');
        })->name('w4-native.button');

        Route::get('/w4/heading', function () {
            return view('w4-native::ui.w4-native-heading');
        })->name('w4-native.heading');

        Route::get('/w4/iconbutton', function () {
            return view('w4-native::ui.w4-native-iconbutton');
        })->name('w4-native.iconbutton');

        Route::get('/w4/icon', function () {
            return view('w4-native::ui.w4-native-icon');
        })->name('w4-native.icon');

        Route::get('/w4/label', function () {
            return view('w4-native::ui.w4-native-label');
        })->name('w4-native.label');

        Route::get('/w4/link', function () {
            return view('w4-native::ui.w4-native-link');
        })->name('w4-native.link');

        Route::get('/w4/text', function () {
            return view('w4-native::ui.w4-native-text');
        })->name('w4-native.text');
    }
}