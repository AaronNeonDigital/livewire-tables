<?php

namespace AaronNeonDigital\LivewireTables\Columns;

class Column extends \AaronNeonDigital\LivewireTables\Column
{
    public string $component = 'livewire-tables::columns.column';

    public string $format = '';

    public function format($format): static
    {
        $this->format = $format;

        return $this;
    }
}
