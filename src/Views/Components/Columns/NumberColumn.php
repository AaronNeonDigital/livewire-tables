<?php

namespace AaronNeonDigital\LivewireTables\Columns;

use AaronNeonDigital\LivewireTables\Column;

class NumberColumn extends Column
{
    public string $component = 'livewire-tables::columns.number-column';

    public ?int $format = null;

    public function format(int $precision = 0): static
    {
        $this->format = $precision;

        return $this;
    }

}
