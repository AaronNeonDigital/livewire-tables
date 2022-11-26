# Requirements
`livewire: "2.0^"`
`php: "8.0^"`

# livewire-tables
You can install livewire tables using:
```bash
composer require aaronneondigital/livewire-tables
```

# Examples

Firstly you must create a livewire component and extend the ``Table`` class
```php
<?php

namespace App\Http\Livewire\Tables;

use AaronNeonDigital\LivewireTables\Tables\Columns\Column;
use AaronNeonDigital\LivewireTables\Tables\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class CrimesTable extends Table
{
    public function query() : Builder
    {
        return User::query();
    }

    public function columns() : array
    {
        return [
            Column::make('created_at', 'Date'),
        ];
    }
}
```

The `query` and `columns` are required.
The `Column` class is chainable. You can use `sortable()` to allow that row to be sortable.
`format(string)` is used to format date, it accepts a string of a date format.

