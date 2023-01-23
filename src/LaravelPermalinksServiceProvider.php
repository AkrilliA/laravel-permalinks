<?php

namespace AkrilliA\LaravelPermalinks;

use Illuminate\Support\ServiceProvider;

class LaravelPermalinksServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/permalinks.php' => config_path('permalinks.php'),
        ]);

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
