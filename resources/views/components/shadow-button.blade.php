@props([
    'href' => '#',
    'variant' => 'primary',
    'size' => 'md',
    'class' => ''
])

@php
    $baseClasses = 'rounded-full font-semibold transition-all duration-300 hover:shadow-[0px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-y-0.125';
    
    $variantClasses = [
        'primary' => 'bg-primary text-primary-100',
        'secondary' => 'bg-gray-200 text-gray-800',
        'success' => 'bg-green-500 text-white',
        'danger' => 'bg-red-500 text-white',
        'warning' => 'bg-yellow-500 text-black',
    ];
    
    $sizeClasses = [
        'sm' => 'py-2 px-4 text-sm',
        'md' => 'py-4 px-8',
        'lg' => 'py-6 px-12 text-lg',
    ];
    
    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $sizeClasses[$size] . ' ' . $class;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
