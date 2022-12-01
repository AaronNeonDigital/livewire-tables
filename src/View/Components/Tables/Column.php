<?php

namespace AaronNeonDigital\LivewireTables\View\Components\Tables;

class Column extends \AaronNeonDigital\LivewireTables\View\Components\Column
{
    public string $component = 'columns.column';

    public string $format = '';

    public function format($format): static
    {
        $this->format = $format;

        return $this;
    }
}
