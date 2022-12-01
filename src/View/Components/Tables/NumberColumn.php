<?php

namespace AaronNeonDigital\LivewireTables\View\Components\Tables;

use AaronNeonDigital\LivewireTables\View\Components\Column;

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
