<?php

use Illuminate\Support\Facades\Route;

if (config('picsum-placeholder.override_route')){
    Route::get(config('picsum-placeholder.override_route'), function () {
        return response(picsum_placeholder()->getBlob())->header('Content-type', 'image/png');
    })->where('path', '(.*)');
}

