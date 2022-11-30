<?php

namespace AaronNeonDigital\LivewireTables;

abstract class Column
{
    /**
     * @var string
     * @description Default column, can be changed by using the component() function and specifying component's livewire
     * path
     */

    public string $component = 'livewire-tables::columns.column';

    /**
     * @var string
     * @description key value of the field you want to apply to the table.
     */
    public string $key;

    /**
     * @var string|null
     * @description label can be null,and in return will us camel cased key and apply laravel format string conversion.
     */
    public ?string $label;

    /**
     * @var bool
     * @description sortable bool, which toggles the ability to add column to the sortable's
     */
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

    /**
     * @param $component
     * @return $this
     * @description Allows you to specify your own component.
     */

    public function component($component): static
    {
        $this->component = $component;

        return $this;
    }

    /**
     * @return $this
     * @description Toggles column as a sortable column
     * @default false
     */

    public function sortable(): static
    {
        $this->sortable = true;

        return $this;
    }

}
