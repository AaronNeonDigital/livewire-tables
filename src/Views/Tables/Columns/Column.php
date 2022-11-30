<?php

namespace AaronNeonDigital\LivewireTables\Tables\Columns;

class Column extends \AaronNeonDigital\LivewireTables\Tables\Column
{
    public string $component = 'livewire-tables::columns.column';

    public string $format = '';

    public function format($format): static
    {
        $this->format = $format;

        return $this;
    }
}
