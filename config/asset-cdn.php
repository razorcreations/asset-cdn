<?php

return [

    'use_cdn' => env('USE_CDN', false),
    'use_mix_cdn' => true,
    'cdn_url' => '',
    'cdn_suffix' => '',
    
    'filesystem' => [
        'disk' => 'asset-cdn',

        'options' => [
            //
        ],
    ],

    'files' => [
        'ignoreDotFiles' => true,

        'ignoreVCS' => true,
        'followSymLinks' => false,

        'include' => [
            'paths' => [
                //
            ],
            'files' => [
                //
            ],
            'extensions' => [
                //
            ],
            'patterns' => [
                //
            ],
        ],

        'exclude' => [
            'paths' => [
                //
            ],
            'files' => [
                //
            ],
            'extensions' => [
                //
            ],
            'patterns' => [
                //
            ],
        ],
    ],

];
