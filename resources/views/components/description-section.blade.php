@props([
    'text' => '',
    'width' => 'w-[737px]',
    'textColor' => 'text-primary',
    'textSize' => 'text-lg',
    'fontWeight' => 'font-bold'
])

<section class="w-full flex items-center justify-center py-16">
    <div class="{{ $width }}">
        <p class="{{ $fontWeight }} text-center {{ $textSize }} {{ $textColor }}">{{ $text }}</p>
    </div>
</section>
