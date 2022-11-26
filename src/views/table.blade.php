<div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8 mt-2">
    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                <tr>
                    @foreach($this->columns() as $column)
                        @php
                            $sortable = $column->sortable ?? false;
                        @endphp
                        @if($sortable)
                            <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900" wire:click="sort('{{ $column->key }}')">
                        @else
                            <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                        @endif
                            <div class="flex items-center cursor-pointer justify-between">
                                {{ $column->label }}
                                @if($sortable)
                                    @if($sortBy === $column->key)
                                        @if ($sortDirection === 'asc')
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-5 text-blue-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>

                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-5 text-blue-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>

                                        @endif
                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    @endif
                                @endif
                            </div>

                        </th>
                    @endforeach
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                @foreach($this->data() as $row)
                    <tr>
                        @foreach($this->columns() as $column)
                            <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">
                                <div class="flex items-center cursor-pointer">
                                    <x-dynamic-component
                                        :component="$column->component"
                                        :value="$row[$column->key]"
                                        :format="$column->format ?? null"
                                    >
                                    </x-dynamic-component>
                                </div>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $this->data()->links() }}
    </div>
</div>
