<?php

namespace AaronNeonDigital\LivewireTables\Providers;

use AaronNeonDigital\LivewireTables\Http\Livewire\Table;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireTablesServiceProvider extends ServiceProvider
{
    protected string $root = __DIR__ . '/../..';

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-tables');

        $this->registerLivewireComponents();
    }

    protected function registerLivewireComponents()
    {
        Livewire::component('table', Table::class);

        // Blade Components
        Blade::componentNamespace('AaronNeonDigital\\LivewireTables\\Views\\Components', 'livewire-tables');
    }
}
