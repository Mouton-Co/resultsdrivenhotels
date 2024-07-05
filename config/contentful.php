<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Contentful API Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for the Contentful API.
    |
    */
    
    'contentful' => [
        'space_id' => env('CONTENTFUL_SPACE_ID'),
        'access_token' => env('CONTENTFUL_ACCESS_TOKEN'),
        'environment' => env('CONTENTFUL_ENVIRONMENT', 'master'),
    ],

];
