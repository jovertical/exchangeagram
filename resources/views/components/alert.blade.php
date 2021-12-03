@props([
    'title',
    'color' => '',
])

<div 
    class="{{
        cx('flex rounded-md p-4', [
            'bg-yellow-100' => $color === 'yellow',
            'bg-red-100' => $color === 'red',
        ])
    }}"
>
    <div>
        <div class="flex items-center space-x-3">
            <div>
                @if ($color === 'yellow')
                    <x-heroicon-s-exclamation class="h-5 w-5 text-yellow-400"></x-heroicon-s-exclamation>
                @endif

                @if ($color === 'red')
                    <x-heroicon-s-x-circle class="h-5 w-5 text-red-400"></x-heroicon-s-x-circle>
                @endif
            </div>

            <h3
                class="{{
                    cx('text-sm font-semibold', [
                        'text-yellow-800' => $color === 'yellow',
                        'text-red-800' => $color === 'red',
                    ])
                }}"
            >
                {{ $title }}
            </h3>
        </div>

        <div
            class="{{
                cx('ml-10 mt-1.5 text-sm', [
                    'text-yellow-700' => $color === 'yellow',
                    'text-red-700' => $color === 'red',
                ])
            }}"
        >
            {{ $slot }}
        </div>
    </div>
</div>
