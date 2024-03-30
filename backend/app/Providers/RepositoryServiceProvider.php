<?php

namespace App\Providers;

use App\Core\Task\Services\Interfaces\TaskRepository as TaskRepositoryInterface;
use App\Core\User\Services\Interfaces\UserRepository as UserRepositoryInterface;
use App\Repositories\Eloquent\{
    TaskRepository,
    UserRepository,
};

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
        $this->app->bind(
            TaskRepositoryInterface::class,
            TaskRepository::class,
        );
        
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class,
        );
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
