@props([
    'text' => '',
    'width' => 'w-[737px]',
    'textColor' => 'text-primary',
    'textSize' => 'text-lg',
    'fontWeight' => 'font-bold'
])

<section class="w-full flex items-center justify-center py-16">
    <div class="{{ $width }}">
        <h5 class="{{ $fontWeight }} text-center {{ $textSize }} {{ $textColor }}">{{ $text }}</h5>
    </div>
</section>
