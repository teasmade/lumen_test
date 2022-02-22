<?php

return [

    'default' => env('DB_CONNECTION', 'pgsql'),
    'migrations' => 'migrations',

        'connections' => [

        'pgsql' => [
            'driver'      => 'pgsql',
            'host'        => env( 'DB_HOST', '127.0.0.1' ),
            'port'        => env( 'DB_PORT', 5432 ),
            'database'    => env( 'DB_DATABASE', 'default' ),
            'username'    => env( 'DB_USERNAME', 'default' ),
            'password'    => env( 'DB_PASSWORD', '' ),
        ],

        ]

];