<?php

use Lunar\Base\StandardMediaConversions;

return [
    'conversions' => [
        StandardMediaConversions::class,
    ],
    'fallback' => [
        'url' => env('FALLBACK_IMAGE_URL', null),
        'path' => env('FALLBACK_IMAGE_PATH', null),
    ],
    'transformations' => [
        'zoom' => [
            'width' => 500,
            'height' => 500,
        ],
        'large' => [
            // ...
        ],
        'medium' => [
            // ...
        ],
        'small' => [
            // ...
        ],
    ],

];
