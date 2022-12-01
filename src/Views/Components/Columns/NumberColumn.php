<?php

namespace AaronNeonDigital\LivewireTables\Views\Components\Columns;

use AaronNeonDigital\LivewireTables\Views\Components\Column;

class NumberColumn extends Column
{
    public string $component = 'columns.number-column';

    public ?int $format = null;

    public function format(int $precision = 0): static
    {
        $this->format = $precision;

        return $this;
    }

}
