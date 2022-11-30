<?php

namespace AaronNeonDigital\LivewireTables\Tables\Columns;

class NumberColumn extends \AaronNeonDigital\LivewireTables\Tables\Column
{
    public string $component = 'livewire-tables::columns.number-column';

    public ?int $format = null;

    public function format(int $precision = 0): static
    {
        $this->format = $precision;

        return $this;
    }

}
