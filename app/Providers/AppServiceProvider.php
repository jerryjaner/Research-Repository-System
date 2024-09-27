<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ResearchRepository;
use App\Interface\ResearchRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ResearchRepositoryInterface::class, ResearchRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
