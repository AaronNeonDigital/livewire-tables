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


        Livewire::component('livewire-tables::column', Column::class);
        Livewire::component('livewire-tables::number-column', NumberColumn::class);
    }
}
