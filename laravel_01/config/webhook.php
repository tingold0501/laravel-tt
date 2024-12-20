<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Webhook URL
    |--------------------------------------------------------------------------
    |
    | This URL is used to handle incoming webhook requests. You should set
    | this to the URL that your webhook provider will send requests to.
    |
    */

    'url' => env('WEBHOOK_URL', 'https://your-webhook-url.com'),

    /*
    |--------------------------------------------------------------------------
    | Webhook Secret
    |--------------------------------------------------------------------------
    |
    | This secret is used to verify the authenticity of incoming webhook
    | requests. You should set this to a value that only you and your
    | webhook provider know.
    |
    */

    // 'secret' => env('WEBHOOK_SECRET', 'your-webhook-secret'),
    'secret' => env('WEBHOOK_SECRET', '12345'),


    /*
    |--------------------------------------------------------------------------
    | Webhook Events
    |--------------------------------------------------------------------------
    |
    | Here you may specify the events that your application should listen
    | for. You can add or remove events as needed.
    |
    */

    'events' => [
        'event1',
        'event2',
        'event3',
    ],

];
