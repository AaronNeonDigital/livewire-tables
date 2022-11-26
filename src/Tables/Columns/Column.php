<?php

namespace AaronNeonDigital\LivewireTables\Tables\Columns;

class Column
{
    public string $component = 'columns.column';

    public string $key;

    public string $label;

    public string $format = '';

    public bool $sortable = false;

    public function __construct($key, $label)
    {
        $this->key = $key;
        $this->label = $label;
    }

    public static function make($key, $label): static
    {
        return new static($key, $label);
    }

    public function component($component): static
    {
        $this->component = $component;

        return $this;
    }

    public function format($format): static
    {
        $this->format = $format;

        return $this;
    }

    public function sortable(): static
    {
        $this->sortable = true;

        return $this;
    }
}
