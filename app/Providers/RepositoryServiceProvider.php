<?php

namespace App\Providers;

use App\Interfaces\TodoRepositoryInterface;
use App\Interfaces\TodoServiceInterface;
use App\Repositories\TodoRepository;
use App\Services\TodoService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(TodoRepositoryInterface::class, TodoRepository::class);
        $this->app->bind(TodoServiceInterface::class, TodoService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
