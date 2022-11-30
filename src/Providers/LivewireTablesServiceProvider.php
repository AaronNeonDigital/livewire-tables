<?php

namespace AaronNeonDigital\LivewireTables\Providers;

use AaronNeonDigital\LivewireTables\Tables\Columns\Column;
use AaronNeonDigital\LivewireTables\Tables\Columns\NumberColumn;
use Faker\Core\Number;
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

//        $components = [
//            Column::class,
//            NumberColumn::class,
//        ];

        Livewire::component('livewire-tables::columns.column', Column::class);
        Livewire::component('livewire-tables::columns.number-column', NumberColumn::class);
    }
}
