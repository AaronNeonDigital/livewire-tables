@php use Carbon\Carbon; @endphp
@props([
    'value', 'format' => null, 'sortable'
])

<div>
    @if($format)
        {{ Carbon::parse($value)->format($format) }}
    @else
        {{ $value }}
    @endif
</div>
