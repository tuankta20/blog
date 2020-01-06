<?php

namespace App\Providers;

use App\Http\Ripositories\BlogRepositoryInterface;
use App\Http\Ripositories\Eloquent\BlogEloquentRepository;
use App\Http\Services\BlogServiceInterface;
use App\Http\Services\impl\BlogImplService;
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
        $this->app->singleton(BlogServiceInterface::class, BlogImplService::class);
        $this->app->singleton(BlogRepositoryInterface::class, BlogEloquentRepository::class);

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
