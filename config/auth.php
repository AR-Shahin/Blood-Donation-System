<?php

return [



    'defaults' => [
        'guard' => 'admin',
        'passwords' => 'admins',
    ],



    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'donor' => [
            'driver' => 'session',
            'provider' => 'donors',
        ],
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],



    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],

        'donors' => [
            'driver' => 'eloquent',
            'model' => App\Models\Donor::class,
        ],
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        // 'admins' => [
        //     'driver' => 'database',
        //     'table' => 'admins',
        // ],
    ],


    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'donors' => [
            'provider' => 'donors',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
