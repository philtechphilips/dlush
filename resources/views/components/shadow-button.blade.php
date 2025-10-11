@props([
    'href' => '#',
    'variant' => 'primary',
    'size' => 'md',
    'class' => ''
])

@php
    $baseClasses = 'rounded-full font-semibold';

    $variantClasses = [
        'primary' => 'bg-primary text-primary-100',
    ];
    
    $hoverBorderClasses = 'hover:border-0 hover:border-r-4 hover:border-b-5 hover:border-l-0 hover:border-t-0 hover:border-solid hover:border-[#0A0005]';

    $sizeClasses = [
        'sm' => 'py-2 px-4 text-sm',
        'md' => 'py-4 px-8',
        'lg' => 'py-6 px-12 text-lg',
    ];

    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $sizeClasses[$size] . ' ' . $hoverBorderClasses . ' ' . $class;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
