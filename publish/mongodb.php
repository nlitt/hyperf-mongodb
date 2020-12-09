<?php

declare(strict_types = 1);

return [
    'default' => [
        'host'     => env('MONGODB_HOST', '127.0.0.1'),
        'port'     => env('MONGODB_PORT', 27017),
        'db'       => env('MONGODB_DB', 'test'),
        'username' => env('MONGODB_USERNAME', ''),
        'password' => env('MONGODB_PASSWORD', ''),
    ],
];
