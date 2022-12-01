<?php

namespace AaronNeonDigital\LivewireTables\View\Components\Columns;

use Illuminate\View\Component;

class NumberColumn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire-tables::columns.number-column');
    }
}
