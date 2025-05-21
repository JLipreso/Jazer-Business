<?php

namespace Jazer\Business\Http\Provider;

use Illuminate\Support\ServiceProvider;

class BusinessServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../../config/database.php', 'business'  
        );
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../../config/config.php' => config_path('businessconfig.php')
        ], 'businessconfig-config');
        
        $this->loadRoutesFrom( __DIR__ . '/../../../routes/api.php');

        config(['database.connections.conn_business' => config('business.database_connection')]);
    }
}
