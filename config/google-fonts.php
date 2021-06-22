<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can register fonts that you can use in the @googlefonts Blade
    | directive. The google-fonts:prefetch command will prefetch these fonts.
    |
    */
    'fonts' => [
        //'code' => 'https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,700;1,400;1,700',
    ],

    /*
    |--------------------------------------------------------------------------
    | Disk
    |--------------------------------------------------------------------------
    |
    | The disk that will be used to store local Google Fonts. The public disk
    | is the default because it can be served over HTTP with storage:link.
    |
    */
    'disk' => 'public',

    /*
    |--------------------------------------------------------------------------
    | Path
    |--------------------------------------------------------------------------
    |
    | Prepend all files that are written to the selected disk with this path.
    | This allows separating the fonts from other data in the public disk.
    |
    */
    'path' => 'fonts',

    /*
    |--------------------------------------------------------------------------
    | Inline
    |--------------------------------------------------------------------------
    |
    | By default, CSS will be inlined to reduce the amount of round trips
    | browsers need to make in order to load the requested font files.
    |
    */
    'inline' => true,

    /*
    |--------------------------------------------------------------------------
    | Fallback
    |--------------------------------------------------------------------------
    |
    | When something goes wrong fonts are loaded directly from Google.
    | With fallback disabled, this package will throw an exception.
    |
    */
    'fallback' => true,

    /*
    |--------------------------------------------------------------------------
    | User Agent
    |--------------------------------------------------------------------------
    |
    | This user agent will be used to request the stylesheet from Google Fonts.
    | This is the Safari 14 user agent that only targets modern browsers. If
    | you want to target older browsers, use different user agent string.
    |
    */
    'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15',

];
