<?php

namespace App\Providers\Game;

use App\Services\GameService;
use App\Services\Interfaces\GameServiceInterface;
use Illuminate\Support\ServiceProvider;

class GameServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
        $this->app->bind(
            GameServiceInterface::class,
            GameService::class
        );
    }

    /**
     * 
     *
     *
     */
    public function provides()
    {
        return [
            GameServiceInterface::class,
        ];
    }
}
