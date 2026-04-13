<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUIFeedbackRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/alert', function () {
            return view('w4-native::feedback.w4-native-ui-alert');
        })->name('w4-native.alert');

        Route::get('/w4/badge', function () {
            return view('w4-native::feedback.w4-native-ui-badge');
        })->name('w4-native.badge');

        Route::get('/w4/loading', function () {
            return view('w4-native::feedback.w4-native-ui-loading');
        })->name('w4-native.loading');

        Route::get('/w4/progress', function () {
            return view('w4-native::feedback.w4-native-ui-progress');
        })->name('w4-native.progress');

        Route::get('/w4/skeleton', function () {
            return view('w4-native::feedback.w4-native-ui-skeleton');
        })->name('w4-native.skeleton');

        Route::get('/w4/toast', function () {
            return view('w4-native::feedback.w4-native-ui-toast');
        })->name('w4-native.toast');
    }
}
