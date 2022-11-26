<?php

namespace AaronNeonDigital\LivewireTables\Providers;

use AaronNeonDigital\LivewireTables\Tables\Columns\Column;
use AaronNeonDigital\LivewireTables\Tables\Columns\NumberColumn;
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
        $this->loadViewsFrom(__DIR__.'/../views', 'livewire-tables');


        Livewire::component('column', Column::class);
        Livewire::component('number-column', NumberColumn::class);
    }
}
