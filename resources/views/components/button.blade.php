@props([
    'type' => 'button',
    'variant' => 'primary',
    'disabled' => false,
    '_class' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm disabled:opacity-50 disabled:cursor-not-allowed',
    'colors' => [
        'primary' => 'text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
    ]
])

<button 
    type="{{ $type }}"
    @if ($disabled) disabled @endif
    {{ $attributes->merge(['class' => $_class . ' ' . $colors[$variant]]) }}
>
    {{ $slot }}
</button>
