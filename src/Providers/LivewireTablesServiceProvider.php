<?php

namespace AaronNeonDigital\LivewireTables\Providers;

use Illuminate\Support\ServiceProvider;

class LivewireTablesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'livewire-tables');
    }
}
