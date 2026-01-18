<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Volt\Volt;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Voltにコンポーネントの場所を教える
        Volt::mount([
            resource_path('views/livewire'),
            resource_path('views/components'),
        ]);
    }
}
