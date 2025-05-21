<?php

return [
    /** Project Configurations */
    'project_refid'                 => env('PROJECT_REFID', ''),


    /** Database Connection Configurations */
    'conn_business_ip'                 => env('CONN_BUSINESS_IP', env('DB_HOST')),
    'conn_business_pt'                 => env('CONN_BUSINESS_PT', env('DB_PORT')),
    'conn_business_db'                 => env('CONN_BUSINESS_DB', env('DB_DATABASE')),
    'conn_business_un'                 => env('CONN_BUSINESS_UN', env('DB_USERNAME')),
    'conn_business_pw'                 => env('CONN_BUSINESS_PW', env('DB_PASSWORD')),

    /** Query parameters */
    'fetch_paginate_max'            => env('FETCH_PAGINATE_MAX', 25),
];
