<?php

namespace AaronNeonDigital\LivewireTables\Http\Livewire;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination;

    public int $perPage = 10;

    public $page = 1;

    public string $sortBy = '';

    public string $sortDirection = 'asc';

    public abstract function query() : Builder;
    public abstract function columns() : array;

    public function data(): LengthAwarePaginator
    {
        return $this
            ->query()
            ->when($this->sortBy !== '', function ($query) {
                $query->orderBy($this->sortBy, $this->sortDirection);
            })
            ->paginate($this->perPage);
    }

    public function sort($key)
    {
        $this->resetPage();

        if ($this->sortBy === $key) {
            $direction = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            $this->sortDirection = $direction;

            return;
        }

        $this->sortBy = $key;
        $this->sortDirection = 'asc';
    }

    public function render(): View
    {
        return view('storefront::livewire.table');
    }
}
