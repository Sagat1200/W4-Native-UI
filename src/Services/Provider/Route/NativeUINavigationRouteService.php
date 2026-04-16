<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUINavigationRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/breadcrumb', function () {
            return view('w4-native::navigation.w4-native-ui-bread-crumb');
        })->name('w4-native.breadcrumb');

        Route::get('/w4/dropdown', function () {
            return view('w4-native::navigation.w4-native-ui-drop-down');
        })->name('w4-native.dropdown');

        Route::get('/w4/menu', function () {
            return view('w4-native::navigation.w4-native-ui-menu');
        })->name('w4-native.menu');

        Route::get('/w4/navbar', function () {
            return view('w4-native::navigation.w4-native-ui-nav-bar');
        })->name('w4-native.navbar');

        Route::get('/w4/sidebar', function () {
            return view('w4-native::navigation.w4-native-ui-sidebar');
        })->name('w4-native.sidebar');

        Route::get('/w4/tab', function () {
            return view('w4-native::navigation.w4-native-ui-tab');
        })->name('w4-native.tab');
    }
}
