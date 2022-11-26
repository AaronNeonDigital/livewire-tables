@props([
    'value', 'format' => null
])

<div>
    @if($format || $format === 0)
        {{ number_format($value, $format) }}
    @else
        {{ $value }}
    @endif
</div>
