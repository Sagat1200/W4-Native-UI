<?php

namespace W4\NativeUI\Services\Provider\Route;

use Illuminate\Support\Facades\Route;

class NativeUITemplatesRouteService
{
    public static function registerRoutes()
    {
        Route::get('/w4/templates/navigation/sidebar-content', function () {
            return view('w4-native::templates.navigation.w4-native-ui-sidebar-content');
        })->name('w4-native.templates.navigation.sidebar-content');
    }
}
