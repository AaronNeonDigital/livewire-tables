<?php

namespace AaronNeonDigital\LivewireTables\Tables;

abstract class Column
{
    /**
     * @var string Default column
     */
    public string $component = 'columns.column';

    public string $key;

    public string $label;

    public bool $sortable = false;

    public function __construct($key, $label)
    {
        $this->key = $key;
        $this->label = $label;
    }

    public static function make($key, $label = ''): static
    {
        if(empty($label)) {
            $label = ucwords(str_replace('_', ' ', $key));
        }

        return new static($key, $label);
    }

    public function component($component): static
    {
        $this->component = $component;

        return $this;
    }

    public function sortable(): static
    {
        $this->sortable = true;

        return $this;
    }

}
