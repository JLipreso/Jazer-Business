<?php

return [
    'database_connection' => [
        'driver'        => 'mysql',
        'host'          => env('CONN_BUSINESS_IP', config('businessconfig.conn_business_ip')),
        'port'          => env('CONN_BUSINESS_PT', config('businessconfig.conn_business_pt')),
        'database'      => env('CONN_BUSINESS_DB', config('businessconfig.conn_business_db')),
        'username'      => env('CONN_BUSINESS_UN', config('businessconfig.conn_business_un')),
        'password'      => env('CONN_BUSINESS_PW', config('businessconfig.conn_business_pw')),
        'charset'       => 'utf8mb4',
        'collation'     => 'utf8mb4_unicode_ci',
        'prefix'        => ''
    ],
];