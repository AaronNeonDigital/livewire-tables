<?php

namespace AaronNeonDigital\LivewireTables\Providers;

use AaronNeonDigital\LivewireTables\Tables\Columns\Column;
use AaronNeonDigital\LivewireTables\Tables\Columns\NumberColumn;
use AaronNeonDigital\LivewireTables\Tables\Table;
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

        Livewire::component('tables.columns.column', Column::class);
        Livewire::component('tables.columns.number-column', NumberColumn::class);
        Livewire::component('tables.table', Table::class);

        // Blade Components
        Blade::componentNamespace('AaronNeonDigital\\LivewireTables\\views', 'livewire-tables');
    }
}
