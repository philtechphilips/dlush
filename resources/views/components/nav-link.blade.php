@props([
    'href' => '#',
    'active' => false,
    'class' => ''
])

@php
    $baseClasses = 'font-semibold transition-all duration-300 group';
    
    $activeClasses = $active 
        ? 'text-primary' 
        : 'text-gray-200 hover:text-primary';
    
    $classes = $baseClasses . ' ' . $activeClasses . ' ' . $class;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if($active)
        <i class="ri-shining-fill ml-2"></i>
    @else
        <i class="ri-shining-line ml-2 group-hover:hidden"></i>
        <i class="ri-shining-fill ml-2 hidden group-hover:inline-block"></i>
    @endif
</a>
