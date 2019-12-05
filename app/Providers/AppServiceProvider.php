<?php

namespace App\Providers;

use App\Repository\Impl\PostRepositoryImpl;
use App\Repository\Contract\PostRepositoryInterface;
use App\Services\Impl\PostService;
use App\Services\PostServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            PostRepositoryInterface::class,
            PostRepositoryImpl::class
        );
        $this->app->singleton(
            PostServiceInterface::class,
            PostService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
