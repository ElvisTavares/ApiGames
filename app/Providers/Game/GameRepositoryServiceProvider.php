<?php

namespace App\Providers\Game;

use App\Repositories\GameRepository;
use App\Repositories\GameRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class GameRepositoryServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            GameRepositoryInterface::class,
            GameRepository::class
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
            GameRepositoryInterface::class,
        ];
    }
}
