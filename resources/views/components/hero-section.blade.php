@props([
    'backgroundImage' => '',
    'overlayOpacity' => '50',
    'title' => '',
    'subtitle' => '',
    'description' => '',
    'width' => 'md:w-[524px] w-full'
])

<section class="md:flex flex-col items-center w-full relative py-16" style="background: url('{{ asset($backgroundImage) }}')">
    <!-- Black overlay with configurable opacity -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 {{ $width }}">
        <p class="mt-20 text-white text-center px-5">{{ $subtitle }}</p>
        <h2 class="font-bold md:text-5xl text-4xl mt-2 text-white text-center">
            {{ $title }}
        </h2>
        <p class="mt-4 text-lg text-white text-center px-5">{{ $description }}</p>
    </div>
</section>
