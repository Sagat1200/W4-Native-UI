<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUIFormsRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/checkbox', function () {
            return view('w4-native::forms.w4-native-ui-check-box');
        })->name('w4-native.checkbox');

        Route::get('/w4/fielderror', function () {
            return view('w4-native::forms.w4-native-ui-field-error');
        })->name('w4-native.fielderror');

        Route::get('/w4/helpertext', function () {
            return view('w4-native::forms.w4-native-ui-help-text');
        })->name('w4-native.helpertext');

        Route::get('/w4/input', function () {
            return view('w4-native::forms.w4-native-ui-input');
        })->name('w4-native.input');

        Route::get('/w4/radio', function () {
            return view('w4-native::forms.w4-native-ui-radio');
        })->name('w4-native.radio');

        Route::get('/w4/select', function () {
            return view('w4-native::forms.w4-native-ui-select');
        })->name('w4-native.select');

        Route::get('/w4/textarea', function () {
            return view('w4-native::forms.w4-native-ui-text-area');
        })->name('w4-native.textarea');

        Route::get('/w4/toggle', function () {
            return view('w4-native::forms.w4-native-ui-toggle');
        })->name('w4-native.toggle');
    }
}
