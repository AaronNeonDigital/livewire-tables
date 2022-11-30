<?php

namespace AaronNeonDigital\LivewireTables\Providers;

use AaronNeonDigital\LivewireTables\Views\Components\Columns\Column;
use AaronNeonDigital\LivewireTables\Views\Components\Columns\NumberColumn;
use AaronNeonDigital\LivewireTables\Views\Components\Table;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireTablesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
//        $this->loadViewsFrom(__DIR__.'/../resources/views', 'l-tables');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-tables');
//        $this->loadViewsFrom(__DIR__.'/views', 'livewire-tables');

        Livewire::component('columns.column', Column::class);
        Livewire::component('columns.number-column', NumberColumn::class);
        Livewire::component('table', Table::class);

        // Blade Components
        Blade::componentNamespace('AaronNeonDigital\\LivewireTables\\views', 'livewire-tables');
    }
}
