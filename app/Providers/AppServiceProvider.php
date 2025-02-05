<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\LivewireServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->register(LivewireServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
