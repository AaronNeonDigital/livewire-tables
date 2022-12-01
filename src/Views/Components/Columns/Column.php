<?php

namespace AaronNeonDigital\LivewireTables\Views\Components\Columns;

class Column extends \AaronNeonDigital\LivewireTables\Views\Components\Column
{
    public string $component = 'columns.column';

    public string $format = '';

    public function format($format): static
    {
        $this->format = $format;

        return $this;
    }
}
