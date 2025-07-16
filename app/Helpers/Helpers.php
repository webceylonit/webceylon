<?php

use Illuminate\Support\Facades\File;

if (!function_exists('safe_asset')) {
    function safe_asset($path)
    {
        $storagePath = public_path($path);
        $fallbackPath = public_path('storage/app/public/' . basename($path));

        if (File::exists($storagePath)) {
            return asset($path);
        } elseif (File::exists($fallbackPath)) {
            return asset('storage/app/public/' . basename($path));
        } else {
            return asset('images/default.png'); // fallback image
        }
    }
}
